{{-- @extends('layout')

@section('titles', 'portfolio')

@section('content')

    <h1>@lang('porfolio')</h1>
  
    <ul>
        @forelse($projects as $project)

            <li><a href="{{ route('portfolio.show', $project )}}">{{ $project->title }} 
                
            {{--   <br><small>{{ $project->description }}</small>
            <br>{{ $project->created_at->format('y-m-d') /*diffForHumans()*/ }}</li> 

		@empty
		
			<li>@lang('no existe mas proyectos')</li>

        @endforelse	

        {{--{{ $projects->links(2) }} 
        
    </ul>
    @yield('content')

    

@endsection

--}}
