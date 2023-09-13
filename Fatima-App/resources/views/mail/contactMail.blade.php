
<h4>{{$data->subject}}</h4>
<hr>
<p>hello Admin,</p>

<p>
    you have a notification from:{{$data->fullName}}
</p>
<p>with the contents below: </p>
<p>Fullname: {{$data->fullName}}</p>
<p>email: {{$data->email}},</p>
<p>Phone Number: {{$data->phoneNumber}}</p>

<p>{{$data->message}}</p>