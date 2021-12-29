
        <a href="https://api.whatsapp.com/send/?phone=201159394324&text=السلام عليم محتاج طلب اورد طباعة" target="_blank">whatsapp message</a>
<br><br>
<br><br>
        <form method="post" action="{{route('count-file')}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            <input type="submit" value="uploads">
        </form>

