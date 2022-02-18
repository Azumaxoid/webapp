<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
</head>
<body>
<a href="/welcome?user=Taro"><button>Welcome Taro</button></a><br />
<a href="/welcome?user=Hanako"><button>Welcome Hanako</button></a><br />
<a href="/welcome?user=NewRelic"><button>Welcome NewRelic</button></a><br />
<a href="/welcome?user=Hoge"><button>Welcome Hoge</button></a><br />
<input type="text" id="nameInput" /><a id=link href="/welcome?user=Hoge"><button id="linkButton">Welcome Hoge</button></a><br />
</body>
<script>
    document.querySelector('#nameInput').onchange = ()=>{
        let name = document.querySelector('#nameInput').value;
        document.querySelector('#link').href = `/welcome?user=${name}`;
        document.querySelector('#linkButton').innerText = `Welcome ${name}`;
    }
</script>
</html>
