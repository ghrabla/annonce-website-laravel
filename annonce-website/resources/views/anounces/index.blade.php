@foreach ($data as $item)
    <div class="container posts-content ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="d-block ui-w-40 rounded-circle" alt="">
                            <div class="media-body ml-3">
                                {{ $item->name}}
                                <div class="text-muted small">{{ $item->created_at}}</div>
                            </div>
                        </div>
                        <p>
                            {{ $item->description }}
                        </p>
        @if ( auth()->user()->id == $item->user_id )
                        <li class="nav-item dropdown d-flex" style="justify-content: flex-end; position:relative;
                        bottom: 150px;    font-weight: 900;">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             ...
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{ url('edit-anounce/'.$item->id) }}">update</a></li>
                                  <li>
                                    <form action="{{ url('delete-anounce/'.$item->id) }}" method="POST">
                                        @csrf
                                    @method('delete')
                                    <button type="submit" class="btn dropdown-item">Delete</button>
                                </form>
                                </li>
                            </ul>
                        </li>
       @endif





       <a href="javascript:void(0)" class="ui-rect ui-bg-cover"

       style="background-image: url('{{ asset("/pictures/$item->photo") }}');"
       ></a>
       {{-- <img src="{{ asset("/pictures/muller.png") }}" alt="" class="ui-rect ui-bg-cover"> --}}
                    </div>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="d-inline-block text-muted">
                            <strong>123</strong> Likes</small>
                        </a>
                        <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                            <strong>12</strong> Comments</small>
                        </a>
                        <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                            <small class="align-middle">Repost</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

