<div>
    <ul class="list-unstyled head">




            <li wire:click="filterTab('all')">الكل</li>
            @foreach ($categories as $cat)

                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link"
                        style="    background: transparent;
                    border: 0;
                    color: #64b1e7;
                    font-weight: bold;"
                        type="submit">
                    </button>
                </li> --}}


                <li wire:click="filterTab({{ $cat->id }})" >{{ $cat->title }}</li>


            @endforeach

    </ul>



    <div class="row">
        @foreach ($my_works as $my_work)
            <div class="col-lg-4 col-md-6 col-sm-12 gallery-card sites mt-5">
                <div class="gallery-card sites">
                    <div class="galleryCard-head">
                        <p class="p-1 m-0">{{ $my_work->type }}</p>
                    </div>
                    <div class="image">

                        <img src="{{ $my_work->image_path }}" alt="gallery-1" class="img-fluid">
                        <div class="overlay">
                            <a href="{{ route('my-works.show', $my_work->id) }}">للتفاصيل </a>
                        </div>
                    </div>
                    <div class="galleryCard-footer">
                        <p class="p-1 m-0">
                            {!! $my_work->name !!}
                        </p>

                    </div>
                </div>
            </div>
        @endforeach


    </div>

</div>
