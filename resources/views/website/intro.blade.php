@extends('website/layout')
@section('title')
Home | Wall of fame
@endsection
{{-- Section buttons --}}
@section('buttons')
{{-- {{dd(Auth::user()->hasRole('admin'))}} --}}
<li class="nav-item t text-left">
    <a href="{{ url('/home') }}" class="dropdown-item">Alles</a>
    </a>
</li>
@foreach ($klassen as $klassen)
<li class="nav-item t text-left">
    <a href="{{ url('/klas/'.$klassen->klas) }}" class="dropdown-item">{{$klassen->klas}}</a>
    </a>
</li>
@endforeach
@if(Auth::check())
@if(Auth::user()->hasRole('admin') == TRUE)
<li class="nav-item t text-left">
    <a href="{{ url('/admin') }}" class="dropdown-item" style="color: red!important">Admin Panel</a>
    </a>
</li>
@endif
@endif
@endsection{{-- end section buttons --}}
{{--  SECTION TOPUSERS --}}
@section('topusers')
{{--  SECTION TOPUSERS --}}
@foreach ($topuser1 as $topuser1)
<a href="{{ url('/details/'.$topuser1->id) }}" class="mx-auto">
    <div class="image_card_al">
        <img src="{{asset('website/1st.png')}}" alt="1st" class="plaats">
    </div>
    <div class="card_user " data-aos="fade-up" data-aos-duration="500">
        <div class="additional">
            <div class="user-card">
                @if ($topuser1->profile_image == 'default.png')
                <img src="{{ asset('Website/default.png') }}" alt="{{$topuser1->profile_image}}" />
                @else
                <img src="{{ asset($pathuser.'/'.$topuser1->id .'/'. $topuser1->profile_image) }}"
                    alt="{{$topuser1->profile_image}}" />
                @endif
                <div class="points center">
                    Likes: {{$topuser1->rank}}
                </div>
            </div>
            <div class="more-info">
                <h2>{{$topuser1->name}}</h2>
                <div class="coords">
                    <span>Klas : {{$topuser1->klas}}</span><br>
                    <span>Opleiding : {{$topuser1->opleiding}}</span>
                    <br>
                </div>
                <div class="coords">
                    <span></span>
                    <span></span>
                </div>
                <div class="stats">
                    @if ($topuser1->github != "#empty")
                    <div>
                        <div class="title">GitHub</div>
                        <i class="fab fa-github-square"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser1->linkedin != "#empty")
                    <div>
                        <div class="title">linkedin</div>
                        <i class="fab fa-linkedin"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser1->gitlab != "#empty")
                    <div>
                        <div class="title">Gitlab</div>
                        <i class="fab fa-gitlab"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        <div class="general">
            <h3>{{$topuser1->name}}</h3>
            <p>{{$topuser1->about}}</p>
        </div>
    </div>
</a>
@endforeach
@foreach ($topuser2 as $topuser2)
<a href="{{ url('/details/'.$topuser2->id) }}" style="margin:0 auto;">
    <div class="image_card_al">
        <img src="{{asset('website/2nd.png')}}" alt="2nd" class="plaats">
    </div>
    <div class="card_user " data-aos="fade-up-left" data-aos-duration="500">
        <div class="additional">
            <div class="user-card">
                @if ($topuser2->profile_image == 'default.png')
                <img src="{{ asset('Website/default.png') }}" alt="{{$topuser2->profile_image}}" />
                @else
                <img src="{{ asset($pathuser.'/'.$topuser2->id .'/'. $topuser2->profile_image) }}"
                    alt="{{$topuser2->profile_image}}" />
                @endif
                <div class="points center">
                    Likes: {{$topuser2->rank}}
                </div>
            </div>
            <div class="more-info">
                <h2>{{$topuser2->name}}</h2>
                <div class="coords">
                    <span>Klas : {{$topuser2->klas}}</span><br>
                    <span>Opleiding : {{$topuser2->opleiding}}</span>
                    <br>
                </div>
                <div class="coords">
                    <span></span>
                    <span></span>
                </div>
                <div class="stats">
                    @if ($topuser2->github != "#empty")
                    <div>
                        <div class="title">GitHub</div>
                        <i class="fab fa-github-square"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser2->linkedin != "#empty")
                    <div>
                        <div class="title">linkedin</div>
                        <i class="fab fa-linkedin"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser2->gitlab != "#empty")
                    <div>
                        <div class="title">Gitlab</div>
                        <i class="fab fa-gitlab"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        <div class="general">
            <h3>{{$topuser2->name}}</h3>
            <p>{{$topuser2->about}}</p>
        </div>
    </div>
</a>
@endforeach
@foreach ($topuser3 as $topuser3)
<a href="{{ url('/details/'.$topuser3->id) }}" style="margin:0 auto;">
    <div class="image_card_al">
        <img src="{{asset('website/3th.png')}}" alt="3th" class="plaats">
    </div>
    <div class="card_user" data-aos="fade-up-right" data-aos-duration="500">
        <div class="additional">
            <div class="user-card">
                @if ($topuser3->profile_image == 'default.png')
                <img src="{{ asset('Website/default.png') }}" alt="{{$topuser3->profile_image}}" />
                @else
                <img src="{{ asset($pathuser.'/'.$topuser3->id .'/'. $topuser3->profile_image) }}"
                    alt="{{$topuser3->profile_image}}" />
                @endif
                <div class="points center">
                    Likes: {{$topuser3->rank}}
                </div>
            </div>
            <div class="more-info">
                <h2>{{$topuser3->name}}</h2>
                <div class="coords">
                    <span>Klas : {{$topuser3->klas}}</span><br>
                    <span>Opleiding : {{$topuser3->opleiding}}</span>
                    <br>
                </div>
                <div class="coords">
                    <span></span>
                    <span></span>
                </div>
                <div class="stats">
                    @if ($topuser3->github != "#empty")
                    <div>
                        <div class="title">GitHub</div>
                        <i class="fab fa-github-square"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser3->linkedin != "#empty")
                    <div>
                        <div class="title">linkedin</div>
                        <i class="fab fa-linkedin"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($topuser3->gitlab != "#empty")
                    <div>
                        <div class="title">Gitlab</div>
                        <i class="fab fa-gitlab"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        <div class="general">
            <h3>{{$topuser3->name}}</h3>
            <p>{{$topuser3->about}}</p>
        </div>
    </div>
</a>
@endforeach
{{-- END SECTION TOPUSERS --}}
@endsection
{{-- END SECTION TOPUSERS --}}
@section('users')
<h3 class="board">Alle Studenten </h3>
@foreach($user as $user)
<a href="{{ url('/details/'.$user->id) }}" style="margin:0 auto;">
    <div class="card_user " data-aos="zoom-in-left" data-aos-disable="mobile">
        <div class="additional">
            <div class="user-card">
                @if ($user->profile_image == 'default.png')
                <img src="{{ asset('Website/default.png') }}" alt="{{$user->profile_image}}" />
                @else
                <img src="{{ asset($pathuser.'/'.$user->id .'/'. $user->profile_image) }}"
                    alt="{{$user->profile_image}}" />
                @endif
                <div class="points center">
                    Likes: {{$user->rank}}
                </div>
            </div>
            <div class="more-info">
                <h2>{{$user->name}}</h2>
                <div class="coords">
                    <span>Klas : {{$user->klas}}</span><br>
                    <span>Opleiding : {{$user->opleiding}}</span>
                    <br>
                </div>
                <div class="coords">
                    <span></span>
                    <span></span>
                </div>
                <div class="stats">
                    @if ($user->github != "#empty")
                    <div>
                        <div class="title">GitHub</div>
                        <i class="fab fa-github-square"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($user->linkedin != "#empty")
                    <div>
                        <div class="title">linkedin</div>
                        <i class="fab fa-linkedin"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                    @if ($user->gitlab != "#empty")
                    <div>
                        <div class="title">Gitlab</div>
                        <i class="fab fa-gitlab"></i>
                        <div class="value"></div>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        <div class="general">
            <h3>{{$user->name}}</h3>
            <p>{{$user->about}}</p>
        </div>
    </div>
</a>
@if($loop->last)
@endif
@endforeach
<!--end profile card-->
@endsection
