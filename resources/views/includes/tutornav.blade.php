<div class="container container-page">

    <ul class="secondary-navbar pull-right">
        <li>
            <a class="{{ Request::is('tutor') ? 'active' : '' }}"
                href="{{ route('tutor.index') }}">Dashboard</a>
        </li>

        <li>
            <a  class="{{ Request::is('tutor/tut', 'tutor/tut/*') ? 'active' : '' }}"
                href="{{ route('tutor.tuts.index') }}">My Tutorials</a>
        </li>

        <li>
            <a class="{{ Request::is('tutor/prep') ? 'active' : '' }}"
                href="{{ route('tutor.prep.index') }}">My Preps</a>
        </li>

        <li>
            <a class="{{ Request::is('tutor/books') ? 'active' : '' }}"
                href="/oncatu/tutor">My Books</a>
        </li>
        <a href="#profile">
            <img src="../images/profile_image.jpg" class="img-circle"
                height="50" alt="My profile">
        </a>
    </ul>
</div>
