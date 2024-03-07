<?php
//Anthony A. Cabulang
echo "My guess in number 1: <br />
0-2 <br />
1-4 <br />
2-6 <br />
3-8 <br /> 
Because there's no any name key mentioned, the array's index will automatically serve as a key and will be printed with its associated value. <br /> <br />";

echo "My guess in number 2: <br />
2 <br />
4 <br />
6 <br />
8 <br /> 
Because there's no mention about key, the content will be the value printed. <br /> <br />";

echo "My guess in number 3: <br />
A-Apple <br />
B-Banana <br />
Because the array's index now have a key name like A and B it will serve as a key and will be printed with its associated value. <br /> <br />";

echo "My guess in number 4: <br />
Apple <br />
Banana <br />
Because there's no mention about key, the content will be the value printed. <br /> <br />";


echo "My guess in number 5: <br />
A <br />
B <br />
Because there's no mention about content, the key will be the value printed. <br /> <br />";

echo "My guess in number 6: <br />
Key is 0 <br />
logging the value <br />
array(size = 3) <br />
details of a1 <br />
details of a2 <br />
details of a3 <br />
... then it will repeat, the next key would be 1 (0 - b1, 1 - b2, 2 - b3), and the last key would be 2 (0 - c1, 1 - c2, 2 - c3) <br />
Because the array's index will serve as a key and will be printed with the text 'Key is {key}', <br />
another text will be printed 'logging the value' and the content of that specific index will be the value printed in var_dump format which includes the size of the array, the index and its content, and type and length of that particular content. <br /> <br />";

echo "My guess in number 7: <br />
logging the value <br />
array(size = 3) <br />
details of a1 <br />
details of a2 <br />
details of a3 <br />
... then it will repeat,  (0 - b1, 1 - b2, 2 - b3), and the last would be (0 - c1, 1 - c2, 2 - c3) <br />
Because there's no key mentioned the text that will be printed 'logging the value' and the content of that specific index will be the value printed in var_dump format which includes the size of the array, the index and its content, and type and length of that particular content. <br /> <br />";

echo "My guess in number 8: <br />
key is 0 <br />
PH - Philippines <br />
KR - South Korea <br />
key is 1 <br />
PHP - Philippine peso <br />
KRW - South Korean won <br />
key is 2 <br />
Manila - Maynilad <br />
Seoul - Seorabeol <br />
Because there's a loop within a loop, the first loop will run and print the key in the text 'key is {key}', after that it will go on to the next loop and print the key with its associated content, after that it will iterate and will loop again until the condition is satisfied. <br /> <br />";

echo "My guess in number 9: <br />
PH - Philippines <br />
KR - South Korea <br />
PHP - Philippine peso <br />
KRW - South Korean won <br />
Manila - Maynilad <br />
Seoul - Seorabeol <br />
Because there's a loop within a loop, the first loop will run and when the condition is satisfied, it will go to the next loop, it will print the content of the array, since there's a key and content mentioned. <br /> <br />";

?>