@if(count($errors)>0)
    @foreach ($errors.all() as $error)
        <div id="alert alert-danger">
            {{error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div id="alert alert-success">
        {{session('success')}}    
    </div>      
@endif

@if (session('error'))
    <div id="alert alert-danger">
        {{session('error')}}    
    </div>      
@endif