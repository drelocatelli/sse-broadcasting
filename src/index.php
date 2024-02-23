<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <data></data>
</body>
</html>

<script>
    window.onload = () => {
        console.log('loaded');
        const evtSource = new EventSource("broadcasting.php");

        evtSource.onmessage = (e) => {
            document.querySelector('data').innerHTML = e.data;
            console.log(e)
        };
        
    };
</script>