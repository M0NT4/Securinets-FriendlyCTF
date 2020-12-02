# Obfuscated js (105 Solves)
![obfuscated js](https://user-images.githubusercontent.com/61760291/100896342-ce081980-34be-11eb-8bcf-342a9c3f577b.png)

>Obfuscation: Transform your code to make it hard to steal or copy. A JavaScript Obfuscator will transform your 
>entire source code to make it virtually impossible to read and understand. ... JavaScript Obfuscation can make 
>it extremely difficult for hackers to reverse-engineer, analyze and exploit the application.

So if you check the source code you will find an obfuscated js function.
```javascript
<script>
        var _0x97d6 = ["\x76\x61\x6C\x75\x65", "\x75\x73\x65\x72\x6E\x61\x6D\x65", "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64", "\x70\x61\x73\x73\x77\x6F\x72\x64", "\x6D\x6F\x6E\x74\x61", "\x68\x61\x72\x64\x74\x6F\x67\x75\x65\x73\x73", "\x43\x6F\x6E\x67\x72\x61\x74\x73\x20\x21\x21\x20\x73\x65\x63\x75\x72\x69\x6E\x65\x74\x73\x7B\x4F\x62\x66\x75\x73\x63\x61\x74\x69\x6F\x6E\x5F\x6D\x61\x6B\x65\x5F\x79\x6F\x75\x72\x5F\x63\x6F\x64\x65\x5F\x68\x61\x72\x64\x5F\x74\x6F\x5F\x73\x74\x65\x61\x6C\x5F\x6F\x72\x5F\x63\x6F\x70\x79\x7D", "\x4F\x6F\x70\x73\x21\x20\x57\x72\x6F\x6E\x67\x20\x75\x73\x65\x72\x6E\x61\x6D\x65\x20\x6F\x72\x20\x70\x61\x73\x73\x77\x6F\x72\x64\x20\x21\x20\uD83D\uDE2D\x20"];
        function check_me() {
            var _0x9a94x2 = document[_0x97d6[2]](_0x97d6[1])[_0x97d6[0]];
            var _0x9a94x3 = document[_0x97d6[2]](_0x97d6[3])[_0x97d6[0]];
            if (_0x9a94x2 == _0x97d6[4] && _0x9a94x3 == _0x97d6[5]) {
                alert(_0x97d6[6])
            } else {
                alert(_0x97d6[7])
            }
        }
</script>
```
we can use an online tool to deobfuscate this code.[Link](https://lelinhtinh.github.io/de4js/)
then we get our flag. "securinets{Obfuscation_make_your_code_hard_to_steal_or_copy}"
