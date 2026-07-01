<form action="/info" method="post">
    @csrf
    <imnput type="text" name="id" placeholder="Enter your id">
        <br> <br>
    <input type="text" name="name" placeholder="Enter your name">
    <br> <br>
    <input type="text" name="email" placeholder="Enter your email">
    <br> <br>
    <input type="text" name="batch" placeholder="Enter your batch">
    <br> <br>
    <button type="submit">Submit</button>


</form>