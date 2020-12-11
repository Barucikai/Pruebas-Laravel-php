@extends('layout')

@section('titles', 'projects')

@section('content')

    <h1>@lang('porfolio')</h1>
    
    <a href="{{ route('projects.create')}}">Create project</a>
    
    <ul>
        @forelse($projects as $project)

            <li><a href="{{ route('projects.show', $project )}}">{{ $project->title }} 
                
            {{--   <br><small>{{ $project->description }}</small>
            <br>{{ $project->created_at->format('y-m-d') /*diffForHumans()*/ }}</li>  --}}

		@empty
		
			<li>@lang('no existe mas proyectos')</li>

        @endforelse	

        {{--{{ $projects->links(2) }}--}}
        
    </ul>
    @yield('content')

    

@endsection


