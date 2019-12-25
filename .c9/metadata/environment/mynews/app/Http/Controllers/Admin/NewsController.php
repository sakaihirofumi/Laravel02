{"changed":true,"filter":false,"title":"NewsController.php","tooltip":"/mynews/app/Http/Controllers/Admin/NewsController.php","value":"<?php\n\nnamespace App\\Http\\Controllers\\Admin;\n\nuse Illuminate\\Http\\Request;\nuse App\\Http\\Controllers\\Controller;\n\nclass NewsController extends Controller\n{\n    //\n    \n    public function add()\n    {\n        return view('admin.news.create');\n    }\n}\n\n","undoManager":{"mark":30,"position":33,"stack":[[{"start":{"row":10,"column":1},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":3},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":6},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["p"],"id":5},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["u"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["b"]}],[{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["l"],"id":6},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["i"]},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["c"]}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":[" "],"id":7},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["f"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["u"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["n"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["c"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["t"],"id":8},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["i"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["o"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":[" "],"id":9},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["a"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["d"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":25},"action":"insert","lines":["()"],"id":10}],[{"start":{"row":11,"column":25},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"insert","lines":["[]"],"id":12}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"remove","lines":["[]"],"id":13}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"insert","lines":["[]"],"id":14}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"remove","lines":["[]"],"id":15}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"insert","lines":["[]"],"id":16}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":6},"action":"remove","lines":["[]"],"id":17}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["{"],"id":18}],[{"start":{"row":12,"column":5},"end":{"row":14,"column":5},"action":"insert","lines":["","        ","    }"],"id":19}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"insert","lines":["r"],"id":20},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["e"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["u"],"id":21},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":13},"action":"remove","lines":["retur"],"id":22},{"start":{"row":13,"column":8},"end":{"row":13,"column":14},"action":"insert","lines":["return"]}],[{"start":{"row":13,"column":14},"end":{"row":13,"column":15},"action":"insert","lines":[" "],"id":23},{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"insert","lines":["v"]},{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["i"]},{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["e"]},{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["w"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":[" "],"id":24},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["d"],"id":25},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":[" "]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":21},"action":"insert","lines":["()"],"id":26}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":22},"action":"insert","lines":["''"],"id":27}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["a"],"id":28},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["d"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["m"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["i"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["n"]}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["."],"id":29},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["n"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["e"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["w"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["."],"id":30}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["c"],"id":31},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["r"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["e"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["a"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["t"]},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":40},"end":{"row":13,"column":41},"action":"insert","lines":[";"],"id":32}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"insert","lines":["p"],"id":33},{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"insert","lines":["h"]},{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"insert","lines":["p"]}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"remove","lines":[" "],"id":35},{"start":{"row":13,"column":43},"end":{"row":13,"column":44},"action":"remove","lines":["p"]},{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"remove","lines":["h"]},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"remove","lines":["p"]}]]},"ace":{"folds":[],"scrolltop":43.5,"scrollleft":0,"selection":{"start":{"row":13,"column":41},"end":{"row":13,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1576661813082}