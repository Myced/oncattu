<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class TutorBookUploadController extends Controller
{
    const thumbnailPath = 'uploads/books/thumbnails/';
    const pdfPath = 'uploads/books/files/';

    public function createBook()
    {
        return view('tutor.upload_book');
    }

    public function storeBook(Request $request)
    {
        //validate
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'edition' => 'required',
            'description' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $book = new Book;

        $book->user_id = auth()->user()->user_id;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->edition = $request->edition;
        $book->description = $request->description;
        $book->type = $request->type;
        $book->price = $request->price;

        //derived parameters
        $book->slug = $this->getSlug($request->title);

        //now check and upload files
        if($request->image == null)
        {
            session()->flash('error', 'Please You must upload the book image');
            return back();
        }

        if($request->pdf == null)
        {
            session()->flash('error', 'You must upload the book pdf');
            return back();
        }

        //all files have been uploaded.
        //save them
        $thumbnailResult = $this->uploadThumbnail($request);
        $pdfResult = $this->uploadBook($request);

        if($thumbnailResult[0] == 'error')
        {
            session()->flash('error', $thumbnailResult[1]);
            return back();
        }
        else {
            $book->thumbnail = $thumbnailResult[1];
        }

        //now book
        if($pdfResult[0] == 'error')
        {
            session()->flash('error', $pdfResult[1]);
            return back();
        }
        else {
            $book->pdf_path = $pdfResult[1];
        }

        //now save the book
        $book->save();

        session()->flash('success', "Book has been uploaded");
        return back();
    }

    public function uploadThumbnail($request)
    {
        //error
        $result = [];

        $file = $request->image;

        $extension = $file->getClientOriginalExtension();

        if($extension != 'jpg' && $extension != 'png'
            && $extension != 'jpeg' && $extension != 'gif'
        )
        {
            $result[0] = 'error';
            $result[1] = "Inappropriate Thumbnail Image Uploaded";
            return $result;
        }

        $fileName = time() . $file->getClientOriginalName();
        $destination = SELF::thumbnailPath;

        $path = $destination . $fileName;

        try
        {
            $file->move($destination, $fileName);
        }
        catch(\Exception $e)
        {
            $result[0] = 'error';
            $result[1] = $e->getMessage();

            return $result;
        }

        $result[0] = 'true';
        $result[1] = $path;

        return $result;
    }

    public function uploadBook($request)
    {
        $pdf = $request->pdf;
        $destination = SELF::pdfPath;
        $output = [];


        $extension = $pdf->getClientOriginalExtension();

        if($extension != 'pdf')
        {
            $output[0] = 'error';
            $output[1] = 'The book must be a pdf';
        }

        ///else upload
        $fileName = time() . $pdf->getClientOriginalName();
        $path = $destination . $fileName;

        try {
            $pdf->move($destination, $fileName);

        } catch (\Exception $e) {
            $output[0] = 'error';
            $output[1] = $e->getMessage();

            return $output;
        }

        //else everthing went well
        $output[0] = 'true';
        $output[1] = $path;

        return $output;

    }

    public function getSlug($string)
    {
        $slug = str_slug($string);

        //make sure the slug does not exist
        $tmp = Book::where('slug', '=', $slug)->get();

        if(count($tmp) > 0)
        {
            //apend some characters to the slug
            $slug .= str_random('5');
        }

        return $slug;
    }
}
