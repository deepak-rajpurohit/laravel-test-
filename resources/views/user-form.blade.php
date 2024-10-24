<div>
    <h2>New User</h2>
    {{-- @if ($errors->any() )
    @foreach ($errors->all() as $error )
    <div style="color: red"s>
        {{ $error }}
    </div>

    @endforeach
    @endif --}}

    <form action="adduser" method="post">
        {{-- {{print_r($errors)}} --}}
        @csrf

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Enter your name here" value="{{ old('name') }}"
            class="{{ $errors->first('name')?'input-error':'' }}"/>
            <span style="color: red">@error('name'){{ $message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter email here" value="{{ old('email') }}"
            class="{{ $errors->first('email')?'input-error':'' }}"/>
            <span style="color: red">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placeholder="enter city here" value="{{ old('city') }}"
            class="{{ $errors->first('city')?'input-error':'' }}"/>
            <span style="color: red">@error('city'){{ $message }}@enderror</span>
        </div>
        <div>
            <h3>Skills</h3>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="NODE" id="node">
            <label for="node">NODE</label>
            <input type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">JAVA</label>
            <span style="color: red">@error('skill'){{ $message }}@enderror</span>
        </div>
        <br>
        <div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">MALE</label>
            <input type="radio" name="gender" value="Femal" id="female">
            <label for="female">FEMALE</label>
            <span style="color: red">@error('gender'){{ $message }}@enderror</span>
        </div>
        <br>
        <div>
            <h3>Native City</h3>
            <select name="Native_city">
                <option value="">Select a city</option>
                <option value="Delhi">Delhi</option>
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Jaipur">Jaipur</option>

            </select>
            <span style="color: red">@error('Native_city'){{ $message }}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button>cilck here</button>
        </div>


    </form>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
</div>
<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange
    }
    .input-wrapper{
        margin:10px
    }
    button{
        border: orange;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange;
        background-color: gray;
        cursor: pointer
    }
        .input-error{
            border:2px solid red;
            color:red;
        }
</style>
