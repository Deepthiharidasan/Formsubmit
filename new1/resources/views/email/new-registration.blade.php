@component('mail::message')
# Introduction : New Registration

Name: {{$projects->name}}
Email: {{$projects->email}}
Mobile: {{$projects->mobile}}
Gender: {{$projects->gender}}
Qualification: {{$projects->qualification}}
Address: {{$projects->address}}


@endcomponent