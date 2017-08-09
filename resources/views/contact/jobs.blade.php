@extends('contact.contact')
@section('text-content')
    @foreach($jobs as $job)
    <div class="uk-margin-large-top uk-margin-large-bottom" >
        <h2 style="color: #cc9966">{{$job->title}}</h2>
        <div style="padding:20px;">
        <p style="font-size: 16px;">【职位描述】</p>
        <div class="jobs-p">
            {!! $job->description !!}
        </div></div>
        <div style="padding:20px;">
        <p style="font-size: 16px;">【任职要求】</p>
        <div class="jobs-p">
            {!! $job->requirements !!}
        </div>
        </div>
    </div>
@endforeach

    <div style="padding:20px;">
        <p style="font-size: 16px;">【联系方式】</p>
        <p>如果您对以上空缺的职位感兴趣，邮件标题注明“姓名+应聘岗位”，我们收到您的简历后会尽快审阅，合则约见，非诚勿扰！</p>
        <p>人力资源部：卫总监</p>
        <p>招聘电话：0755-82986281</p>
        <p>招聘邮箱：hr@chinajzhr.com</p>
    </div>
    @endsection