{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <script>
        function sendAjaxRequest(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // handle success response
                        document.getElementById('result').innerHTML = xhr.responseText;
                    } else {
                        // handle error response
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
            xhr.open('POST', '{$conf->action_url}DogShowLike', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            var data = 'searchbar=' + document.getElementById('searchbar').value + '&page=' + page; // add your data here
            xhr.send(data);
        }
    </script>
    <div class = 'konik5'>
        <h1 class = 'header1'>Lista Naszych Psiaków</h1>
        <div>
            <input class = "konik7" id="searchbar" placeholder="Czego szukasz? :)" />
            <button class = "button1"  onclick="sendAjaxRequest(0)">Szukaj</button>
        </div>
        <div id="result">
            {include file='dogList.tpl'}
        </div>
    </div>
    {include file='messages.tpl'}
{/block}