{"filter":false,"title":"books.blade.php","tooltip":"/cms/resources/views/books.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":86,"column":48},"end":{"row":86,"column":51},"action":"insert","lines":["データ"],"id":711}],[{"start":{"row":86,"column":51},"end":{"row":86,"column":53},"action":"insert","lines":["表示"],"id":718}],[{"start":{"row":86,"column":33},"end":{"row":86,"column":34},"action":"remove","lines":["/"],"id":719}],[{"start":{"row":86,"column":32},"end":{"row":86,"column":33},"action":"remove","lines":["/"],"id":720}],[{"start":{"row":86,"column":32},"end":{"row":86,"column":36},"action":"insert","lines":["<!--"],"id":721}],[{"start":{"row":86,"column":36},"end":{"row":86,"column":37},"action":"insert","lines":["　"],"id":722}],[{"start":{"row":86,"column":36},"end":{"row":86,"column":37},"action":"remove","lines":["　"],"id":723}],[{"start":{"row":86,"column":36},"end":{"row":86,"column":37},"action":"insert","lines":[" "],"id":724}],[{"start":{"row":86,"column":56},"end":{"row":86,"column":60},"action":"insert","lines":[" -->"],"id":725}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["/"],"id":726}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["/"],"id":727}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":17},"action":"insert","lines":["<!-- "],"id":728}],[{"start":{"row":25,"column":29},"end":{"row":25,"column":33},"action":"insert","lines":[" -->"],"id":729}],[{"start":{"row":100,"column":37},"end":{"row":101,"column":0},"action":"insert","lines":["",""],"id":730},{"start":{"row":101,"column":0},"end":{"row":101,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":101,"column":32},"end":{"row":102,"column":0},"action":"insert","lines":["",""],"id":731},{"start":{"row":102,"column":0},"end":{"row":102,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":102,"column":32},"end":{"row":112,"column":37},"action":"insert","lines":["<!-- 本: 削除ボタン -->","                                <td>","                                    <form action=\"{{ url('book/delete/'.$book->id) }}\" method=\"POST\">","                                        ","                                        {{ csrf_field() }}","","                                        <button type=\"submit\" class=\"btn btn-danger\"> <i class=\"glyphicon glyphicon-trash\"></i> ","                                            削除","                                        </button>","                                    </form>","                                </td>"],"id":732}],[{"start":{"row":102,"column":45},"end":{"row":102,"column":46},"action":"remove","lines":["ン"],"id":733}],[{"start":{"row":102,"column":44},"end":{"row":102,"column":45},"action":"remove","lines":["タ"],"id":734}],[{"start":{"row":102,"column":43},"end":{"row":102,"column":44},"action":"remove","lines":["゙"],"id":735}],[{"start":{"row":102,"column":42},"end":{"row":102,"column":43},"action":"remove","lines":["ホ"],"id":736}],[{"start":{"row":102,"column":41},"end":{"row":102,"column":42},"action":"remove","lines":["除"],"id":737}],[{"start":{"row":102,"column":40},"end":{"row":102,"column":41},"action":"remove","lines":["削"],"id":738}],[{"start":{"row":102,"column":40},"end":{"row":102,"column":41},"action":"insert","lines":["k"],"id":739}],[{"start":{"row":102,"column":41},"end":{"row":102,"column":42},"action":"insert","lines":["o"],"id":740}],[{"start":{"row":102,"column":42},"end":{"row":102,"column":43},"action":"insert","lines":["u"],"id":741}],[{"start":{"row":102,"column":42},"end":{"row":102,"column":43},"action":"remove","lines":["u"],"id":742}],[{"start":{"row":102,"column":41},"end":{"row":102,"column":42},"action":"remove","lines":["o"],"id":743}],[{"start":{"row":102,"column":40},"end":{"row":102,"column":41},"action":"remove","lines":["k"],"id":744}],[{"start":{"row":102,"column":40},"end":{"row":102,"column":45},"action":"insert","lines":["更新ボタン"],"id":758}],[{"start":{"row":104,"column":67},"end":{"row":104,"column":68},"action":"remove","lines":["t"],"id":759}],[{"start":{"row":104,"column":66},"end":{"row":104,"column":67},"action":"remove","lines":["e"],"id":760}],[{"start":{"row":104,"column":65},"end":{"row":104,"column":66},"action":"remove","lines":["l"],"id":761}],[{"start":{"row":104,"column":64},"end":{"row":104,"column":65},"action":"remove","lines":["e"],"id":762}],[{"start":{"row":104,"column":63},"end":{"row":104,"column":64},"action":"remove","lines":["d"],"id":763}],[{"start":{"row":104,"column":62},"end":{"row":104,"column":63},"action":"remove","lines":["/"],"id":764}],[{"start":{"row":104,"column":61},"end":{"row":104,"column":62},"action":"remove","lines":["k"],"id":765}],[{"start":{"row":104,"column":60},"end":{"row":104,"column":61},"action":"remove","lines":["o"],"id":766}],[{"start":{"row":104,"column":59},"end":{"row":104,"column":60},"action":"remove","lines":["o"],"id":767}],[{"start":{"row":104,"column":58},"end":{"row":104,"column":59},"action":"remove","lines":["b"],"id":768}],[{"start":{"row":104,"column":58},"end":{"row":104,"column":59},"action":"insert","lines":["u"],"id":769}],[{"start":{"row":104,"column":59},"end":{"row":104,"column":60},"action":"insert","lines":["p"],"id":770}],[{"start":{"row":104,"column":60},"end":{"row":104,"column":61},"action":"insert","lines":["d"],"id":771}],[{"start":{"row":104,"column":61},"end":{"row":104,"column":62},"action":"insert","lines":["a"],"id":772}],[{"start":{"row":104,"column":62},"end":{"row":104,"column":63},"action":"insert","lines":["t"],"id":773}],[{"start":{"row":104,"column":63},"end":{"row":104,"column":64},"action":"insert","lines":["e"],"id":774}],[{"start":{"row":104,"column":63},"end":{"row":104,"column":64},"action":"remove","lines":["e"],"id":775}],[{"start":{"row":109,"column":45},"end":{"row":109,"column":46},"action":"remove","lines":["除"],"id":776}],[{"start":{"row":109,"column":44},"end":{"row":109,"column":45},"action":"remove","lines":["削"],"id":777}],[{"start":{"row":109,"column":44},"end":{"row":109,"column":46},"action":"insert","lines":["更新"],"id":785}],[{"start":{"row":108,"column":73},"end":{"row":108,"column":83},"action":"remove","lines":["btn-danger"],"id":786},{"start":{"row":108,"column":73},"end":{"row":108,"column":84},"action":"insert","lines":["btn-success"]}],[{"start":{"row":108,"column":107},"end":{"row":108,"column":122},"action":"remove","lines":["glyphicon-trash"],"id":787},{"start":{"row":108,"column":107},"end":{"row":108,"column":124},"action":"insert","lines":["glyphicon-refresh"]}],[{"start":{"row":7,"column":38},"end":{"row":8,"column":8},"action":"insert","lines":["","        "],"id":788}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["d"],"id":789}],[{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["i"],"id":790}],[{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["v"],"id":791}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":11},"action":"remove","lines":["div"],"id":792},{"start":{"row":8,"column":8},"end":{"row":8,"column":19},"action":"insert","lines":["<div></div>"]}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"insert","lines":[" "],"id":793}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["c"],"id":794}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["l"],"id":795}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["a"],"id":796}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["s"],"id":797}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["s"],"id":798}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["="],"id":799}],[{"start":{"row":8,"column":19},"end":{"row":8,"column":21},"action":"insert","lines":["\"\""],"id":800}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["r"],"id":801}],[{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["o"],"id":802}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"insert","lines":["w"],"id":803}],[{"start":{"row":8,"column":25},"end":{"row":8,"column":31},"action":"remove","lines":["</div>"],"id":804}],[{"start":{"row":135,"column":2},"end":{"row":135,"column":3},"action":"remove","lines":[" "],"id":805}],[{"start":{"row":135,"column":1},"end":{"row":135,"column":2},"action":"remove","lines":[" "],"id":806}],[{"start":{"row":135,"column":1},"end":{"row":135,"column":5},"action":"insert","lines":["    "],"id":807}],[{"start":{"row":135,"column":5},"end":{"row":135,"column":9},"action":"insert","lines":["    "],"id":808}],[{"start":{"row":135,"column":9},"end":{"row":135,"column":15},"action":"insert","lines":["</div>"],"id":809}],[{"start":{"row":105,"column":63},"end":{"row":105,"column":64},"action":"remove","lines":["e"],"id":810}],[{"start":{"row":105,"column":62},"end":{"row":105,"column":63},"action":"remove","lines":["t"],"id":811}],[{"start":{"row":105,"column":61},"end":{"row":105,"column":62},"action":"remove","lines":["a"],"id":812}],[{"start":{"row":105,"column":60},"end":{"row":105,"column":61},"action":"remove","lines":["d"],"id":813}],[{"start":{"row":105,"column":59},"end":{"row":105,"column":60},"action":"remove","lines":["p"],"id":814}],[{"start":{"row":105,"column":58},"end":{"row":105,"column":59},"action":"remove","lines":["u"],"id":815}],[{"start":{"row":105,"column":58},"end":{"row":105,"column":59},"action":"insert","lines":["d"],"id":816}],[{"start":{"row":105,"column":59},"end":{"row":105,"column":60},"action":"insert","lines":["e"],"id":817}],[{"start":{"row":105,"column":60},"end":{"row":105,"column":61},"action":"insert","lines":["t"],"id":818}],[{"start":{"row":105,"column":61},"end":{"row":105,"column":62},"action":"insert","lines":["a"],"id":819}],[{"start":{"row":105,"column":62},"end":{"row":105,"column":63},"action":"insert","lines":["i"],"id":820}],[{"start":{"row":105,"column":63},"end":{"row":105,"column":64},"action":"insert","lines":["l"],"id":821}],[{"start":{"row":102,"column":32},"end":{"row":103,"column":0},"action":"insert","lines":["",""],"id":822},{"start":{"row":103,"column":0},"end":{"row":103,"column":32},"action":"insert","lines":["                                "]}],[{"start":{"row":103,"column":32},"end":{"row":103,"column":49},"action":"insert","lines":["<!-- 本: 更新ボタン -->"],"id":823}],[{"start":{"row":103,"column":44},"end":{"row":103,"column":45},"action":"remove","lines":["ン"],"id":824}],[{"start":{"row":103,"column":43},"end":{"row":103,"column":44},"action":"remove","lines":["タ"],"id":825}],[{"start":{"row":103,"column":42},"end":{"row":103,"column":43},"action":"remove","lines":["ボ"],"id":826}],[{"start":{"row":103,"column":41},"end":{"row":103,"column":42},"action":"remove","lines":["新"],"id":827}],[{"start":{"row":103,"column":40},"end":{"row":103,"column":41},"action":"remove","lines":["更"],"id":828}],[{"start":{"row":103,"column":39},"end":{"row":103,"column":40},"action":"remove","lines":[" "],"id":829}],[{"start":{"row":103,"column":38},"end":{"row":103,"column":39},"action":"remove","lines":[":"],"id":830}],[{"start":{"row":103,"column":37},"end":{"row":103,"column":38},"action":"remove","lines":["本"],"id":831}],[{"start":{"row":103,"column":37},"end":{"row":103,"column":38},"action":"insert","lines":["k"],"id":832}],[{"start":{"row":103,"column":38},"end":{"row":103,"column":39},"action":"insert","lines":["a"],"id":833}],[{"start":{"row":103,"column":38},"end":{"row":103,"column":39},"action":"remove","lines":["a"],"id":834}],[{"start":{"row":103,"column":37},"end":{"row":103,"column":38},"action":"remove","lines":["k"],"id":835}],[{"start":{"row":103,"column":37},"end":{"row":103,"column":39},"action":"insert","lines":["課題"],"id":841}],[{"start":{"row":103,"column":39},"end":{"row":103,"column":40},"action":"insert","lines":["2"],"id":842}],[{"start":{"row":50,"column":91},"end":{"row":50,"column":92},"action":"remove","lines":[" "],"id":861}],[{"start":{"row":50,"column":92},"end":{"row":50,"column":93},"action":"remove","lines":["s"],"id":860}],[{"start":{"row":50,"column":93},"end":{"row":50,"column":94},"action":"remove","lines":["t"],"id":859}],[{"start":{"row":50,"column":94},"end":{"row":50,"column":95},"action":"remove","lines":["e"],"id":858}],[{"start":{"row":50,"column":95},"end":{"row":50,"column":96},"action":"remove","lines":["p"],"id":857}],[{"start":{"row":50,"column":96},"end":{"row":50,"column":97},"action":"remove","lines":["="],"id":856}],[{"start":{"row":50,"column":97},"end":{"row":50,"column":98},"action":"remove","lines":["\""],"id":855}],[{"start":{"row":50,"column":98},"end":{"row":50,"column":99},"action":"remove","lines":["1"],"id":854}],[{"start":{"row":50,"column":99},"end":{"row":50,"column":100},"action":"remove","lines":["\""],"id":853}],[{"start":{"row":50,"column":37},"end":{"row":50,"column":38},"action":"remove","lines":["t"],"id":852}],[{"start":{"row":50,"column":38},"end":{"row":50,"column":39},"action":"remove","lines":["i"],"id":851}],[{"start":{"row":50,"column":39},"end":{"row":50,"column":40},"action":"remove","lines":["m"],"id":850}],[{"start":{"row":50,"column":40},"end":{"row":50,"column":41},"action":"remove","lines":["e"],"id":849}],[{"start":{"row":50,"column":41},"end":{"row":50,"column":42},"action":"remove","lines":["-"],"id":848}],[{"start":{"row":50,"column":42},"end":{"row":50,"column":43},"action":"remove","lines":["l"],"id":847}],[{"start":{"row":50,"column":43},"end":{"row":50,"column":44},"action":"remove","lines":["o"],"id":846}],[{"start":{"row":50,"column":44},"end":{"row":50,"column":45},"action":"remove","lines":["c"],"id":845}],[{"start":{"row":50,"column":45},"end":{"row":50,"column":46},"action":"remove","lines":["a"],"id":844}],[{"start":{"row":50,"column":46},"end":{"row":50,"column":47},"action":"remove","lines":["l"],"id":843}]]},"ace":{"folds":[],"scrolltop":480,"scrollleft":0,"selection":{"start":{"row":50,"column":46},"end":{"row":50,"column":47},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":63,"state":"start","mode":"ace/mode/php"}},"timestamp":1509631536354,"hash":"cf989190e6e69b806aa66c56e65a1793cebf34db"}