{{-- @include('sub.header') --}}
<x-message-banner msg="User Login Successfully" class="success" />
<x-message-banner msg="User Sign Up Successfully" class="success"/>
<br>
<br>
<br>
<x-message-banner msg="Password is not correct please try again" class="error"/>
<br>
<br>
<x-message-banner msg="Trying to get somethis which is not available" class="alert"/>


<h1>Home page here </h1>
<style>
    .success{
        background-color: lightgreen;
        color: green;
        padding: 10px 10px;
        border-radius: 10px;
        display: inline-block;
        margin: 10px
    }
    .error{
        background-color: rgb(240, 87, 87);
        color: white;
        padding: 10px 10px;
        border-radius: 10px;
        display: inline-block;
        margin: 10px
    }
    .alert{
        background-color: yellow;
        color: red;
        padding: 10px 10px;
        border-radius: 10px;
        display: inline-block;
        margin: 10px
    }
</style>
{{-- @include('sub.inner',['page'=>"This is main page"]) --}}
