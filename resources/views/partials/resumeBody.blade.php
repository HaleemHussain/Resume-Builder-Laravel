<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Summary</h3>
                <div class="resume-item pb-0">
                    <h4>{{$user->details->fullname}}</h4>
                    <p><em>{{$user->details->summary}}</em></p>
                    <p>
                    <ul>
                        <li>{{$user->details->address}}</li>
                        <li>{{$user->details->phone}}</li>
                        <li>{{$user->details->email}}</li>
                    </ul>
                    </p>
                </div>

                <h3 class="resume-title">Education</h3>
                @foreach($user->education as $e)
                <div class="resume-item">
                    <h4>{{$e->field_of_study}}</h4>
                    <h5>{{$e->graduation_start_date}} - {{$e->graduation_end_date}}</h5>
                    <p><em>{{$e->school_name}}</em></p>
                </div>
                @endforeach

            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                @foreach($user->experience as $e)
                <div class="resume-item">
                    <h4>{{$e->job_title}}</h4>
                    <h5>{{$e->start_date}} - {{$e->end_date}}</h5>
                    <p><em>{{$e->employer}}, {{$e->city}} </em></p>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Skills</h3>
                @foreach($user->skill as $e)
                    <div class="resume-item">
                        <h4>{{$e->name}}</h4>
                        <h5>{{$e->rating}}/5</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
