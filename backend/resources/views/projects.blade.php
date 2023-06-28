<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/projects.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="projects container">
        <h1>Current projects</h1>
        <div class="projects__wrapper">
            @foreach ($projects as $project)
                <div class="projects__item">
                    <div class="projects__item-left">
                        <h2>{{$project->name}}</h2>
                        <p class="descr">{{$project->description}}</p>
                        <div class="projects__meta">
                            <div class="projects__meta-item">
                                <p class="bullet">Status: </p>
                                <span>{{$project->status}}</span>
                            </div>

                            <div class="projects__meta-item">
                                <p class="bullet">Maintainers:</p>
                                <ul>
                                    @foreach ($project->maintainers as $maintainer)
                                        <li>{{$maintainer->name}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="projects__meta-item">
                                <p class="bullet">Developers:</p>
                                <ul>
                                    @foreach ($project->developers as $developer)
                                        <li>{{$developer->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="projects__item-right">
                        <div class="projects__item-expiration">
                            <p>{{rand(1, 10)}}</p>
                        </div>
                        <p>Expiration date:</p>
                        <p>{{$project->expiration_date}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>
