['resword']:<?php--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'div'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$a--------------------
['resword']:---------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$a'], [['resword'], '%'], [['exp', 'phpvar'], '$b']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['resword']:/--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$b--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'jshref'], [['fargsb'], [[['resword'], '('], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$url'], [['resword'], '='], [['farg', 'args', 'exp', 'string'], '"definput"']]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'string'], '"window.location.href = \'"'], ['resword', '.'], [['exp', 'phpvar'], '$url']]], ['resword', '.'], [['exp', 'string'], '"\'"']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'sessm'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_SESSION'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], '&&'], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$_SESSION'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], '=='], [['exp', 'phpvar'], '$val']]]]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:init_db--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:global--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$DB'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$db_data']]--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$DB'], [['resword'], '=='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$DB'], [['resword'], '='], [['farg', 'args', 'exp'], [[['resword'], 'new'], [['fargs', 'farg', 'args', 'exp', 'name'], 'mysqli'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$db_data'], [['resword'], '['], [['exp', 'string'], "'host'"], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$db_data'], [['resword'], '['], [['exp', 'string'], "'user'"], [['resword'], ']']]]]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$db_data'], [['resword'], '['], [['exp', 'string'], "'pass'"], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$db_data'], [['resword'], '['], [['exp', 'string'], "'db'"], [['resword'], ']']]]]]]], [['resword'], ')']]]]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Sql--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'init'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$DB'], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:closedb--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$DB'], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$DB'], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$DB'], [['resword'], '->'], [['exp', 'name'], 'close']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$default'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['resword']:(--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '!=='], [['exp'], [[['exp', 'name'], 'null'], [['resword'], '&&'], [['exp', 'name'], 'isset']]]]], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$default--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'post'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$default'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_POST']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$default']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isget'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_GET'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'ispost'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_POST'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isses'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_SESSION'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'get'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$default'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_GET']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$default']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'sets'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_SESSION'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'gets'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$default'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_SESSION']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$default']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:load_view--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$view'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]]]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:global--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$view_default'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo']]--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$view_default'], [['resword'], '['], [['exp', 'phpvar'], '$view'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'mergeifunset'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$view_default'], [['resword'], '['], [['exp', 'phpvar'], '$view'], [['resword'], ']']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"page"']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'getNameFromUrl']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Fun--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:getcururl--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"islogin"']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'User']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginType--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$tem_name'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'getloadviewname'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$view'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$templates--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Templates--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'method_exists'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$templates'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tem_name']]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$templates'], [['resword'], '->'], [['exp', 'phpvar'], '$tem_name']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'true'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:else--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$view'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gi'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '"loadviewfile"'], [['resword'], ')']]], [['resword'], '.'], [['farg', 'args', 'exp', 'phpvar'], '$view']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'file_exists'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$view'], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$inp--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$key--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$$key'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:include--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$view--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'true'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:else--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'name']:echo--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp'], [[['exp', 'string'], '"MM Error : Unable to load view "'], [['resword'], '.'], [['exp', 'phpvar'], '$view']]], [['resword'], '.'], [['exp'], [[['exp', 'string'], '" Line "'], [['resword'], '.'], [['exp', 'name'], '__LINE__']]]]], [['resword'], '.'], [['exp'], [[['exp', 'string'], '" in file "'], [['resword'], '.'], [['exp', 'name'], '__FILE__']]]]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'false'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'str2json'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'json_decode'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], ')']]--------------------
['resword']:return--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp', 'name'], 'array'], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$temp--------------------
['resword']:;--------------------
['resword']:else--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'arr2option'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$type'], [['resword'], '='], [['farg', 'args', 'exp', 'string'], "'intval'"]]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:'disptext'--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], "'val'"]]--------------------
['resword']:=>--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$type'], [['resword'], '=='], [['exp', 'string'], "'intval'"]]--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$i'], [['resword'], '+'], [['exp', 'number'], '1']]--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$temp--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'lastelm'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:==--------------------
['resword']:0--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$arr--------------------
['resword']:[--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp', 'number']:-1--------------------
['resword']:]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'firstelm'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:==--------------------
['resword']:0--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$arr--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:curfilename--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$cfname'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'firstelm']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:explode--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '"."'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'lastelm']]--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'explode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"/"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_SERVER'], [['resword'], '['], [['exp', 'string'], "'SCRIPT_FILENAME'"], [['resword'], ']']]]]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$cfname'], [['resword'], '=='], [['exp', 'string'], "''"]]], [['resword'], ')']]--------------------
['insts']:[[['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$cfname'], [['resword'], '='], [['farg', 'args', 'exp', 'string'], '"index"']]], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$cfname'], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isUserLoggedInAs'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$loginTypeArray'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$userLoginType'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'User']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginType--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'in_array'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$userLoginType'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$loginTypeArray']]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'number'], '1'], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:return--------------------
['resword']:0--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isvalid_action'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"action_constrain"'], [['resword'], ']']]], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$sarr'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"action_constrain"'], [['resword'], ']']]], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$sarr'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:mergeifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$sarr'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"users"--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '""'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"need"']]--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['resword']:(--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp', 'phpvar'], '$sarr'], [['resword'], '['], [['exp', 'string'], '"users"'], [['resword'], ']']]], [['resword'], '=='], [['exp'], [[['exp', 'string'], '"all"'], [['resword'], '&&'], [['exp', 'name'], 'User']]]]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:islogin--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:||--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp', 'phpvar'], '$sarr'], [['resword'], '['], [['exp', 'string'], '"users"'], [['resword'], ']']]], [['resword'], '=='], [['exp', 'string'], '""']]--------------------
['resword']:||--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp', 'phpvar'], '$sarr'], [['resword'], '['], [['exp', 'string'], '"users"'], [['resword'], ']']]], [['resword'], '!='], [['exp'], [[['exp', 'string'], '"all"'], [['resword'], '&&'], [['exp', 'name'], 'in_array']]]]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginType--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$sarr'], [['resword'], '['], [['exp', 'string'], '"users"'], [['resword'], ']']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'number'], '-2'], [['resword'], ';']]--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'Fun'], [['resword'], '::'], [['fargs', 'farg', 'args', 'exp', 'name'], 'isAllSet'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$sarr'], [['resword'], '['], [['exp', 'string'], '"need"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data']]], [['resword'], ')']]]]--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'number'], '-9'], [['resword'], ';']]--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'true'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'islset'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['insts']:[[['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'false'], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]]]], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'true'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'getmyneed'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$fname'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts'], [[['insts', 'inst'], [[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"action_constrain"'], [['resword'], ']']]], [['resword'], '['], [['exp', 'phpvar'], '$fname'], [['resword'], ']']]], [['resword'], '['], [['exp', 'string'], '"need"'], [['resword'], ']']]], [['resword'], ';']]]]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'handle_request'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$action'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$b--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Actions--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isloginas'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], "'s'"], [['resword'], ')']]--------------------
['resword']:)--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$a--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Students--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:else--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isloginas'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], "'a'"], [['resword'], ')']]--------------------
['resword']:)--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$a--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Admin--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:else--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isloginas'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], "'t'"], [['resword'], ')']]--------------------
['resword']:)--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$a--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Teachers--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:else--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$b']]], [['resword'], ';']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"ec"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'number']:-7--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action'], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$action']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$isvalid'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isvalid_action'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$isvalid--------------------
['resword']:>--------------------
['resword']:0--------------------
['resword']:)--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"ec"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$isvalid']]], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$func'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'method_exists'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$a'], [['resword'], '->'], [['exp', 'phpvar'], '$func']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'method_exists'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$b'], [['resword'], '->'], [['exp', 'phpvar'], '$func']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:islset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"autoinsert"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ')']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$action_spec'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"autoinsert"'], [['resword'], ']']]], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$action_spec'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:mergeifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$action_spec'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"fixed"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"add"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$ins_data'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'getflds'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'getmyneed'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$ins_data'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'mergeifunset'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ins_data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"add"'], [['resword'], ']']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$fixvalues'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"time"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:time--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"uid"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginId--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"fixed"'], [['resword'], ']']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$ins_data'], [['resword'], '['], [['exp', 'phpvar'], '$val'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$fixvalues'], [['resword'], '['], [['exp', 'phpvar'], '$val'], [['resword'], ']']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"data"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Sqle']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'insertVal'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"table"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ins_data']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"ec"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'number'], '1']]], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'rquery'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'preg_match_all'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"|{[^}]+}|U"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$matches']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$matches'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$matches']]--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:;--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$matches'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$key'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'substr']]--------------------
['resword']:(--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$matches'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '1']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'strlen'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$matches'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ')']]]]--------------------
['fargs', 'farg', 'args', 'exp', 'number']:-2--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$str'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'str_replace']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$matches'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'timeondate'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$day'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$month']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$year']]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'strtotime'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp'], [[['exp'], [[['exp', 'phpvar'], '$day'], [['resword'], '.'], [['exp', 'string'], '"-"']]], [['resword'], '.'], [['exp'], [[['exp', 'phpvar'], '$month'], [['resword'], '.'], [['exp', 'string'], '"-"']]]]], [['resword'], '.'], [['exp', 'phpvar'], '$year']]], [['resword'], ')']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setift--------------------
['resword']:(--------------------
['resword']:&--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$var'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$istrue'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'true']]]]--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$istrue'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$var'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'getifn'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$alt'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'rit'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$inp'], [['resword'], '!='], [['exp', 'name'], 'null']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$alt']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setifnn--------------------
['resword']:(--------------------
['resword']:&--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$var'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'setift'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$var'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$var'], [['resword'], '=='], [['exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setifunset--------------------
['resword']:(--------------------
['resword']:&--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['insts']:[[['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:mergeifunset--------------------
['resword']:(--------------------
['resword']:&--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b']]--------------------
['resword']:)--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$keys'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'array_keys'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$b'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$keys'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$a'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$keys'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$a'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$keys'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$b'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$keys'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'myexplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$n'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$st']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$filterfunc'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'explode']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$n'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$st']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:=--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], ')']]], [['resword'], '=='], [['farg', 'args', 'exp'], [[['exp', 'number'], '1'], [['resword'], '&&'], [['exp', 'phpvar'], '$temp']]]]--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:==--------------------
['fargs', 'farg', 'args', 'exp', 'string']:""--------------------
['resword']:)--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$temp--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$filterfunc'], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'filter'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$filterfunc']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:else--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'intexplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ex'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'myexplode']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ex'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$temp--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$temp'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:+--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'intexplode_t2'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$limit'], [['resword'], '='], [['farg', 'args', 'exp', 'number'], '-1']]]]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$ex'], [['resword'], '='], [['farg', 'args', 'exp', 'string'], "'-'"]]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$temp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'myexplode']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ex'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$temp--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:+--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:;--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'number'], '1'], [['resword'], '<='], [['exp', 'phpvar'], '$val']]--------------------
['resword']:&&--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$limit'], [['resword'], '=='], [['exp'], [[['exp', 'number'], '-1'], [['resword'], '||'], [['exp', 'phpvar'], '$val']]]]], [['resword'], '<='], [['exp', 'phpvar'], '$limit']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'daystarttime'], [['fargsb'], [[['resword'], '('], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$ts'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'name']:setifnn--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ts'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'time']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'name']:strtotime--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Fun--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'timetodate'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$ts'], [['resword'], ')']]--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'resizeimg'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_width'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_height']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['insts']:[[['insts'], [[['codeblock', 'insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$imginfo'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'getimagesize'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ')']]]]], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'list'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$orig_width'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$orig_height']]], [['resword'], ')']]]]], [['resword'], '='], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$imginfo']]], [['resword'], ';']]]]], [['insts'], [[['insts'], [[['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$type'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$imginfo'], [['resword'], '['], [['exp', 'number'], '2'], [['resword'], ']']]]]], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$crop_width'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$orig_width']]], [['resword'], ';']]]]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$crop_height'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$orig_height']]], [['resword'], ';']]]]]]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$orig_width'], [['resword'], '*'], [['exp', 'phpvar'], '$max_height']]], [['resword'], '<='], [['exp'], [[['exp', 'phpvar'], '$orig_height'], [['resword'], '*'], [['exp', 'phpvar'], '$max_width']]]]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$crop_height'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$orig_width'], [['resword'], '*'], [['exp', 'phpvar'], '$max_height']]], [['resword'], '/'], [['exp', 'phpvar'], '$max_width']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:else--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$crop_width'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$orig_height'], [['resword'], '*'], [['exp', 'phpvar'], '$max_width']]], [['resword'], '/'], [['exp', 'phpvar'], '$max_height']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'imagecreatetruecolor']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_width'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_height']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'switch'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$type'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"1"--------------------
['resword']::--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$image'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'imagecreatefromgif'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$transparent'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'imagecolorallocatealpha']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$image_p--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'number']:127--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:imagefill--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$image_p--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$transparent--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagealphablending'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'true']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"2"--------------------
['resword']::--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$image'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'imagecreatefromjpeg'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"3"--------------------
['resword']::--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$image'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'imagecreatefrompng'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagealphablending'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'false']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagesavealpha'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'true']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:default--------------------
['resword']::--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$image'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'imagecreatefromjpeg'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$filename'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['fargs', 'farg', 'args', 'exp', 'name']:imagecopyresampled--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image']]--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$orig_width'], [['resword'], '-'], [['exp', 'phpvar'], '$crop_width']]], [['resword'], ')']]--------------------
['resword']:/--------------------
['fargs', 'farg', 'args', 'exp', 'number']:2--------------------
['resword']:,--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$orig_height'], [['resword'], '-'], [['exp', 'phpvar'], '$crop_height']]], [['resword'], ')']]--------------------
['resword']:/--------------------
['fargs']:[[['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'number'], '2'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_width']]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$max_height'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$crop_width']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$crop_height']]--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$ext'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'pathinfo']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'PATHINFO_EXTENSION']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'switch'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$ext'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"gif"--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagegif'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"jpg"--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagejpeg'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '100']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"jpeg"--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagejpeg'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '100']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:case--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"png"--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:imagepng--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:break--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:default--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'imagejpeg'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$image_p'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '100']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:}--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'chmod'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$tosave'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '0777']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:getrefarr--------------------
['resword']:(--------------------
['resword']:&--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$inp--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$inp--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['resword']:&--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$inp'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'gtable'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$name'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$alias'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'true']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]--------------------
['resword']:return--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$alias--------------------
['resword']:?--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp'], [[['exp'], [[['exp', 'string'], '"("'], [['resword'], '.'], [['exp', 'phpvar'], '$_ginfo']]], [['resword'], '['], [['exp', 'string'], '"query"'], [['resword'], ']']]], [['resword'], '['], [['exp', 'phpvar'], '$name'], [['resword'], ']']]], [['resword'], '.'], [['exp'], [[['exp', 'string'], '") "'], [['resword'], '.'], [['exp', 'phpvar'], '$name']]]]], [['resword'], ')']]--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"query"'], [['resword'], ']']]], [['resword'], '['], [['exp', 'phpvar'], '$name'], [['resword'], ']']]--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'grouplist'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$gap'], [['resword'], '='], [['farg', 'args', 'exp', 'number'], '1']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$started--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$ended--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$started'], [['resword'], '=='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts'], [[['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$started'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$inp'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]]]], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$ended'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$started']]], [['resword'], ';']]]]], [['resword'], '}']]--------------------
['resword']:else--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$inp'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], '-'], [['exp'], [[['exp', 'phpvar'], '$ended'], [['resword'], '=='], [['exp', 'phpvar'], '$gap']]]]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$ended'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$inp'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:else--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$started--------------------
['resword']:,--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$ended'], [['resword'], '-'], [['exp', 'phpvar'], '$started']]], [['resword'], ')']]--------------------
['resword']:/--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$gap'], [['resword'], '+'], [['exp', 'number'], '1']]--------------------
['resword']:)--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$started'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:----------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$started'], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$started--------------------
['resword']:,--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$ended'], [['resword'], '-'], [['exp', 'phpvar'], '$started']]], [['resword'], ')']]--------------------
['resword']:/--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$gap'], [['resword'], '+'], [['exp', 'number'], '1']]--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'sql2dict'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$key']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$data--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$row--------------------
['resword']:)--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$row'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$row']]], [['resword'], ';']]], [['resword'], '}']]--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'errormsg'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ec'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$cnd'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'true']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]--------------------
['resword']:return--------------------
['resword']:(--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$ec--------------------
['resword']:<--------------------
['resword']:0--------------------
['resword']:&&--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$cnd--------------------
['resword']:)--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ec'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"error"'], [['resword'], ']']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'string'], '"Error : "'], [['resword'], '.'], [['exp', 'phpvar'], '$ec']]]]], [['resword'], ')']]]]--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'string']:""--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'tf'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$inp--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"true"--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"false"--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'autoscroll'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]--------------------
['resword']:{--------------------
['insts']:[[['insts', 'inst'], [[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$action_spec'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$_ginfo'], [['resword'], '['], [['exp', 'string'], '"autoscroll"'], [['resword'], ']']]], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ']']]]]], [['resword'], ';']]]]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:mergeifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$action_spec'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:'sort'--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], "''"], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], "'maxl'"]]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], "'minl'"]]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"filterfunc"']]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'null'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"load_view"']]--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp'], [[['exp', 'string'], '"template/"'], [['resword'], '.'], [['exp', 'phpvar'], '$post_data']]], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], '.'], [['exp', 'string'], '".php"']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$fixed'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"uid"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginId--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"time"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:time--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'mergeforce'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$fixed']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$qoutput'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Sqle']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'autoscroll'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"query"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data']]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"key"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"sort"'], [['resword'], ']']]]]]]], [['resword'], ','], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"isloadold"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"minl"'], [['resword'], ']']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"maxl"'], [['resword'], ']']]]]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"filterfunc"'], [['resword'], ']']]], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$autos--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Autoscroll--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$funcname'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"filterfunc"'], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'method_exists'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$autos'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$funcname']]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$qoutput'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$autos'], [['resword'], '->'], [['exp', 'phpvar'], '$funcname']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$qoutput'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['insts']:[[['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$qoutput'], [['resword'], '['], [['exp', 'string'], '"load_view"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$action_spec'], [['resword'], '['], [['exp', 'string'], '"load_view"'], [['resword'], ']']]]]], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$qoutput'], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'handle_disp'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$actionarg'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$actionarg'], [['resword'], '!='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$actionarg']]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$a--------------------
['resword']:=--------------------
['resword']:new--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Actiondisp--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"ec"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'number']:-7--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$isvalid'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isvalid_action'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$isvalid--------------------
['resword']:>--------------------
['resword']:0--------------------
['resword']:)--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"ec"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$isvalid']]], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$func'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'method_exists'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ')']]]]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$a'], [['resword'], '->'], [['exp', 'phpvar'], '$func']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$actionarg'], [['resword'], '=='], [['exp', 'name'], 'null']]]]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:return--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:else--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:islset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$_ginfo'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"autoscroll"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$post_data'], [['resword'], '['], [['exp', 'string'], '"action"'], [['resword'], ']']]]]], [['resword'], ')']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$as_handle'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'autoscroll'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$post_data'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"data"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'getflds'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'array'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"min"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"max"']]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"minl"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"maxl"']]]]], [['resword'], ')']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$as_handle']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp', 'string'], '"ec"'], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'number'], '1']]], [['resword'], ';']]--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$actionarg'], [['resword'], '=='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:echo--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['farg', 'args', 'exp', 'name'], 'json_encode'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ')']]], [['resword'], '.'], [['farg', 'args', 'exp', 'string'], '"\\n"']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'name']:load_view--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$as_handle'], [['resword'], '['], [['exp', 'string'], '"load_view"'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"qresult"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$as_handle'], [['resword'], '['], [['exp', 'string'], '"qresult"'], [['resword'], ']']]--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:return--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$actionarg'], [['resword'], '=='], [['exp', 'name'], 'null']]], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp', 'name']:echo--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['farg', 'args', 'exp', 'name'], 'json_encode'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ')']]], [['resword'], '.'], [['farg', 'args', 'exp', 'string'], '"\\n"']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'subsarr'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr1'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr2']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$arr1--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'in_array'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$i'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr2']]], [['resword'], ')']]]]--------------------
['resword']:)--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'rit'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$toprint'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$cond'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'true']]]]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$toprint_false'], [['resword'], '='], [['farg', 'args', 'exp', 'string'], "''"]]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$cond'], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$toprint'], [['resword'], ';']]--------------------
['resword']:else--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$toprint_false'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'convchars'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$conv'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"&"--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '"&amp;"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '\'"\'']]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '"&quot;"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"\'"']]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '"&#039;"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"<"']]--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'string'], '"&lt;"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '">"']]--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"&gt;"--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$conv--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'str_replace']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$i'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'getNameFromUrl'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$url'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$arr'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'myexplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], "'/'"], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$url']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$index'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array_search']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], "'welcome'"], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$arr']]], [['resword'], ')']]--------------------
['resword']:+--------------------
['fargs', 'farg', 'args', 'exp', 'number']:1--------------------
['resword']:;--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]], [['resword'], ')']]], [['resword'], ')']]--------------------
['resword']:||--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]], [['resword'], '=='], [['exp'], [[['exp'], [[['exp', 'string'], "''"], [['resword'], '||'], [['exp', 'phpvar'], '$arr']]], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]]]], [['resword'], '=='], [['exp', 'string'], "'#'"]]--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'string'], "'index'"], [['resword'], ';']]--------------------
['resword']:else--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'strpos'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], "'?'"]]], [['resword'], ')']]]]], [['resword'], '!=='], [['fargs', 'farg', 'args', 'exp', 'name'], 'false']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$ok'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'myexplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], "'?'"], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$ok--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$arr'], [['resword'], '['], [['exp', 'phpvar'], '$index'], [['resword'], ']']]], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'searchkeysplit'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$searchString'], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$searchString'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'preg_replace']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"/[^a-zA-Z 0-9]+/"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '" "']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$searchString']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['insts']:[[['codeblock', 'insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$searchString'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'trim'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$searchString'], [['resword'], ')']]]]], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'myexplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '" "'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'strtolower'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$searchString'], [['resword'], ')']]]]], [['resword'], ')']]]]], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'g'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts'], [[['insts', 'inst'], [[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$$inp'], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$$inp'], [['resword'], ';']]]]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 's'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$val'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['codeblock']:[[['resword'], '{'], [['insts'], [[['insts', 'inst'], [[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$$inp'], [['resword'], ';']]], [['insts', 'inst'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]]]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'gi'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'getval'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'g'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '"_ginfo"'], [['resword'], ')']]]]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:listget--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$args'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'func_get_args']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inplist'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array_slice']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$args'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'number'], '1']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'getval']]--------------------
['resword']:(--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$args--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$inplist--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'getval']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:gget--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$args'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'func_get_args']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$args--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'name']:g--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:getval--------------------
['resword']:(--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$args--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'call_user_func_array'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"listget"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$args']]], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:giget--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$args'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'func_get_args']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$args--------------------
['resword']:[--------------------
['resword']:0--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'name']:gi--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'name']:getval--------------------
['resword']:(--------------------
['resword']:0--------------------
['resword']:,--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$args--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'call_user_func_array'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"listget"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$args']]], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'filter'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$list'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$boolfunc']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$list--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$boolfunc--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$i']]], [['resword'], ')']]--------------------
['resword']:===--------------------
['fargs', 'farg', 'args', 'exp', 'name']:true--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:map--------------------
['resword']:(--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$list'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$func']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$custom'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]]]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'name']:mergeifunset--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$custom'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"isindexed"--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'false'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"ismapkey"']]--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:false--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$list--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'phpvar'], '$custom'], [['resword'], '['], [['exp', 'string'], '"ismapkey"'], [['resword'], ']']]], [['resword'], ')']]--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], '['], [['exp'], [[['farg', 'args', 'exp', 'phpvar'], '$func'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$i'], [['resword'], ')']]], [['resword'], ']']]], [['resword'], '='], [['farg', 'args', 'exp', 'phpvar'], '$val']]], [['resword'], ';']]--------------------
['resword']:else--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$outp--------------------
['resword']:[--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$custom'], [['resword'], '['], [['exp', 'string'], '"isindexed"'], [['resword'], ']']]--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$val--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:)--------------------
['resword']:]--------------------
['resword']:=--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$func--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$val'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$i']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$outp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'add'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gettype'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ')']]], [['resword'], '=='], [['exp'], [[['farg', 'args', 'exp'], [[['exp', 'string'], '"array"'], [['resword'], '&&'], [['exp', 'name'], 'gettype']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$b'], [['resword'], ')']]]]], [['resword'], '=='], [['farg', 'args', 'exp', 'string'], '"array"']]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'Fun'], [['resword'], '::'], [['fargs', 'farg', 'args', 'exp', 'name'], 'array_append'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:else--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gettype'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ')']]], [['resword'], '=='], [['exp'], [[['farg', 'args', 'exp'], [[['exp', 'string'], '"array"'], [['resword'], '&&'], [['exp', 'name'], 'gettype']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$b'], [['resword'], ')']]]]], [['resword'], '=='], [['farg', 'args', 'exp', 'string'], '"integer"']]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'Fun'], [['resword'], '::'], [['fargs', 'farg', 'args', 'exp', 'name'], 'array_addinall'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$a'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$b']]], [['resword'], ')']]]]], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'msvalprint'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gettype'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]], [['resword'], '=='], [['farg', 'args', 'exp', 'string'], '"array"']]], [['resword'], ')']]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$isnindex--------------------
['resword']:=--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['farg', 'args', 'exp', 'name'], 'array_keys'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]], [['resword'], '=='], [['farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:oneToN--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp', 'number']:-1--------------------
['resword']:,--------------------
['resword']:0--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$otext'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'map']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'array_keys'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:,--------------------
['resword']:function--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ind'], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'use'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$isnindex'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$isnindex--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp', 'string']:""--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp'], [[['exp', 'string'], '"\'"'], [['resword'], '.'], [['exp', 'phpvar'], '$ind']]], [['resword'], '.'], [['exp', 'string'], '"\'=>"']]--------------------
['resword']:)--------------------
['resword']:.--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'msvalprint'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$inp'], [['resword'], '['], [['exp', 'phpvar'], '$ind'], [['resword'], ']']]], [['resword'], ')']]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'string'], '"array("'], [['resword'], '.'], [['exp', 'name'], 'implode']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '", "'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$otext']]], [['resword'], ')']]--------------------
['resword']:.--------------------
['fargs', 'farg', 'args', 'exp', 'string']:")"--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:else--------------------
['resword']:if--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gettype'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]], [['resword'], '=='], [['farg', 'args', 'exp', 'string'], "'integer'"]]], [['resword'], ')']]--------------------
['codeblock']:[[['resword'], '{'], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ';']]], [['resword'], '}']]--------------------
['resword']:else--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'str_replace']]--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'string'], '"\'"'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"\\\\\'"']]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'string'], '""'], [['resword'], '.'], [['exp', 'phpvar'], '$inp']]]]], [['resword'], ')']]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['exp', 'string'], '"\'"'], [['resword'], '.'], [['exp', 'phpvar'], '$inp']]], [['resword'], '.'], [['exp', 'string'], '"\'"']]], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'msimplode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$glue'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$defval'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'count'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:==--------------------
['resword']:0--------------------
['resword']:&&--------------------
['fargs', 'farg', 'args', 'exp']:[[['exp', 'phpvar'], '$defval'], [['resword'], '!='], [['exp', 'name'], 'null']]--------------------
['resword']:)--------------------
['resword']:?--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$defval--------------------
['resword']::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'implode'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$glue'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'f'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$content'], [['resword'], ')']]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'global'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$msvar'], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$af--------------------
['resword']:=--------------------
['resword']:function--------------------
['fargsb']:[[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$ind']]], [['resword'], ')']]--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'use'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$content'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$msvar']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$content'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp'], [[['exp', 'string'], "'$foutput  = '"], [['resword'], '.'], [['exp', 'phpvar'], '$content']]], [['resword'], '.'], [['exp', 'string'], "';'"]]]]], [['resword'], ';']]--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'eval'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$content'], [['resword'], ')']]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$foutput'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$af'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:ao--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'name']:array--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"ec"--------------------
['resword']:=>--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'number'], '1'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'string'], '"data"']]--------------------
['resword']:=>--------------------
['resword']:0--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:msmail--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$file'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$data'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'array']]]]--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:,--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$to'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'setifnn'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$to'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'gi'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '"adminmail"'], [['resword'], ')']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'Fun'], [['resword'], '::'], [['fargs', 'farg', 'args', 'exp', 'name'], 'mailfromfile'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$to'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['exp'], [[['farg', 'args', 'exp', 'name'], 'gi'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '"mailfile"'], [['resword'], ')']]], [['resword'], '.'], [['farg', 'args', 'exp', 'phpvar'], '$file']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data']]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'emptyarr'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'name']:map--------------------
['resword']:(--------------------
['fargs']:[[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'f'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '\'""\''], [['resword'], ')']]]]], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'array']]--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'string']:"isindexed"--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'name']:true--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:a--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'name']:func_get_args--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'fixedlen'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$len'], [['resword'], '='], [['farg', 'args', 'exp', 'number'], '20']]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:return--------------------
['fargs', 'farg', 'args', 'exp', 'name']:Fun--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:limitlen--------------------
['resword']:(--------------------
['fargs']:[[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$len'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'name'], 'Fun']]--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'inclen'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$len'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp']]], [['resword'], ')']]]]--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'mystr_repeat'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$len']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:if--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$len--------------------
['resword']:>--------------------
['resword']:0--------------------
['resword']:)--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp'], [[['fargs', 'farg', 'args', 'exp', 'name'], 'str_repeat'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$str'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$len']]], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:else--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'string'], '""'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp', 'name']:lid--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:{--------------------
['resword']:return--------------------
['resword']:(--------------------
['resword']:0--------------------
['resword']:+--------------------
['fargs', 'farg', 'args', 'exp', 'name']:User--------------------
['resword']:::--------------------
['fargs', 'farg', 'args', 'exp', 'name']:loginId--------------------
['resword']:(--------------------
['resword']:)--------------------
['resword']:)--------------------
['resword']:;--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'applyconv'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$isdbtodisp'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'true']]]]], [['resword'], ','], [['fargs'], [[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$onlythese'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]], [['resword'], ','], [['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$conva'], [['resword'], '='], [['farg', 'args', 'exp', 'name'], 'null']]]]]]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'setifnn'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$conva'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'g'], [['resword'], '('], [['farg', 'args', 'exp', 'string'], '"formconv"'], [['resword'], ')']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'setifnn'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$onlythese'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'name'], 'array_keys'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$conva'], [['resword'], ')']]]]], [['resword'], ')']]]]--------------------
['resword']:;--------------------
['resword']:foreach--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$onlythese--------------------
['fargs', 'farg', 'args', 'exp', 'name']:as--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=>--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$key--------------------
['resword']:)--------------------
['resword']:{--------------------
['fargs', 'farg', 'assign']:[[['farg', 'args', 'exp', 'phpvar'], '$conv'], [['resword'], '='], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$conva'], [['resword'], '['], [['exp', 'phpvar'], '$key'], [['resword'], ']']]]]--------------------
['resword']:[--------------------
['fargsb']:[[['resword'], '('], [['fargs', 'farg', 'args', 'exp'], [[['exp', 'number'], '1'], [['resword'], '-'], [['exp', 'phpvar'], '$isdbtodisp']]], [['resword'], ')']]--------------------
['resword']:]--------------------
['resword']:;--------------------
['codeblock', 'insts', 'inst']:[[['fargs', 'farg', 'assign'], [[['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], '='], [['farg', 'args', 'exp'], [[['farg', 'args', 'exp', 'phpvar'], '$conv'], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ')']]]]], [['resword'], ';']]--------------------
['resword']:}--------------------
['codeblock', 'insts', 'inst']:[[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$inp'], [['resword'], ';']]--------------------
['resword']:}--------------------
['resword']:function--------------------
['fargs', 'farg', 'args', 'exp']:[[['fargs', 'farg', 'args', 'exp', 'name'], 'isallset'], [['fargsb'], [[['resword'], '('], [['fargs'], [[['fargs', 'farg', 'args', 'exp', 'phpvar'], '$alist'], [['resword'], ','], [['fargs', 'farg', 'args', 'exp', 'phpvar'], '$data']]], [['resword'], ')']]]]--------------------
['resword']:{--------------------
['resword']:for--------------------
['resword']:(--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:=--------------------
['resword']:0--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$i'], [['resword'], '<'], [['exp', 'name'], 'count']]], [['resword'], '('], [['farg', 'args', 'exp', 'phpvar'], '$alist'], [['resword'], ')']]--------------------
['resword']:;--------------------
['fargs', 'farg', 'args', 'exp', 'phpvar']:$i--------------------
['resword']:++--------------------
['resword']:)--------------------
['resword']:if--------------------
['resword']:(--------------------
['resword']:!--------------------
['fargs', 'farg', 'args', 'exp']:[[['farg', 'args', 'exp', 'name'], 'isset'], [['resword'], '('], [['farg', 'args', 'exp'], [[['exp', 'phpvar'], '$data'], [['resword'], '['], [['exp'], [[['exp', 'phpvar'], '$alist'], [['resword'], '['], [['exp', 'phpvar'], '$i'], [['resword'], ']']]], [['resword'], ']']]], [['resword'], ')']]--------------------
['resword']:)--------------------
['insts']:[[['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'false'], [['resword'], ';']]], [['insts', 'inst'], [[['resword'], 'return'], [['fargs', 'farg', 'args', 'exp', 'name'], 'true'], [['resword'], ';']]]]--------------------
['resword']:}--------------------
['resword']:?>