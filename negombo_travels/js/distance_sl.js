/*
Indices of the 42 Cities

0 Ambepussa
1 Anuradhapura
2 Badulla
3 Bandarawela
4 Batticaloa
5 Bentota
6 Beruwela
7 Colombo
8 Dambulla
9 Ella
10 Galle
11 Habarana
12 Hambantota
13 Hikkaduwa
14 Inginiyagala
15 Jaffna
16 Kalkudah (Pasekudah)
17 Kalutara
18 Kandy
19 Kataragama
20 Koggala
21 Kurunegala
22 Mannar
23 Matale
24 Matara
25 MtLavinia
26 Negombo
27 Nuwara Eliya
28 Polonnaruwa
29 Pottuvil
30 Puttalam
31 Ratnapura
32 Sigiriya
33 Talaimannar
34 Tangalle
35 Tissamaharama
36 Trincomalee
37 Valaichenai
38 Vavuniya
39 Wellawaya
40 Wilpattu
41 Yala 
*/

function disp()
{
var val1=document.dist.citybox1.selectedIndex
var val2=document.dist.citybox2.selectedIndex
var val3=document.dist.sel1
var val4=document.dist.sel2
var temp=0

var distarr = new Array()
//For Ambepussa
distarr["01"]=154
distarr["02"]=177
distarr["03"]=168
distarr["04"]=243
distarr["05"]=122
distarr["06"]=115
distarr["07"]=60
distarr["08"]=89
distarr["09"]=177
distarr["010"]=175
distarr["011"]=112
distarr["012"]=209
distarr["013"]=158
distarr["014"]=260
distarr["015"]=336
distarr["016"]=222
distarr["017"]=103
distarr["018"]=56
distarr["019"]=243
distarr["020"]=190
distarr["021"]=34
distarr["022"]=253
distarr["023"]=82
distarr["024"]=220
distarr["025"]=72
distarr["026"]=45
distarr["027"]=121
distarr["028"]=156
distarr["029"]=306
distarr["030"]=121
distarr["031"]=85
distarr["032"]=112
distarr["033"]=280
distarr["034"]=218
distarr["035"]=236
distarr["036"]=198
distarr["037"]=220
distarr["038"]=195
distarr["039"]=206
distarr["040"]=149
distarr["041"]=276

// For Anuradhapura
distarr["12"]=272
distarr["13"]=163
distarr["14"]=196
distarr["15"]=270
distarr["16"]=261
distarr["17"]=206
distarr["18"]=66
distarr["19"]=272
distarr["110"]=322
distarr["111"]=58
distarr["112"]=364
distarr["113"]=304
distarr["114"]=277
distarr["115"]=195
distarr["116"]=168
distarr["117"]=249
distarr["118"]=138
distarr["119"]=377
distarr["120"]=337
distarr["121"]=121
distarr["122"]=111
distarr["123"]=113
distarr["124"]=367
distarr["125"]=218
distarr["126"]=170
distarr["127"]=216
distarr["128"]=101
distarr["129"]=304
distarr["130"]=74
distarr["131"]=240
distarr["132"]=82
distarr["133"]=138
distarr["134"]=373
distarr["135"]=355
distarr["136"]=106
distarr["137"]=166
distarr["138"]=53
distarr["139"]=296
distarr["140"]=39
distarr["141"]=401

// For Badulla
distarr["23"]=32
distarr["24"]=167
distarr["25"]=229
distarr["26"]=237
distarr["27"]=230
distarr["28"]=206
distarr["29"]=24
distarr["210"]=256
distarr["211"]=230
distarr["212"]=134
distarr["213"]=273
distarr["214"]=128
distarr["215"]=454
distarr["216"]=170
distarr["217"]=206
distarr["218"]=134
distarr["219"]=134
distarr["220"]=241
distarr["221"]=175
distarr["222"]=370
distarr["223"]=159
distarr["224"]=211
distarr["225"]=242
distarr["226"]=222
distarr["227"]=56
distarr["228"]=233
distarr["229"]=123
distarr["230"]=262
distarr["231"]=129
distarr["232"]=230
distarr["233"]=398
distarr["234"]=175
distarr["235"]=112
distarr["236"]=277
distarr["237"]=167
distarr["238"]=312
distarr["239"]=53
distarr["240"]=290
distarr["241"]=158

//For Bandarawela
distarr["34"]=183
distarr["35"]=198
distarr["36"]=205
distarr["37"]=197
distarr["38"]=197
distarr["39"]=8
distarr["310"]=240
distarr["311"]=222
distarr["312"]=117
distarr["313"]=253
distarr["314"]=141
distarr["315"]=445
distarr["316"]=188
distarr["317"]=171
distarr["318"]=124
distarr["319"]=118
distarr["320"]=224
distarr["321"]=166
distarr["322"]=361
distarr["323"]=150
distarr["324"]=195
distarr["325"]=212
distarr["326"]=213
distarr["327"]=47
distarr["328"]=250
distarr["329"]=138
distarr["330"]=253
distarr["331"]=98
distarr["332"]=221
distarr["333"]=388
distarr["334"]=159
distarr["335"]=96
distarr["336"]=292
distarr["337"]=186
distarr["338"]=309
distarr["339"]=37
distarr["340"]=281
distarr["341"]=142

// For Batticaloa
distarr["45"]=367
distarr["46"]=358
distarr["47"]=303
distarr["48"]=163
distarr["49"]=175
distarr["410"]=380
distarr["411"]=142
distarr["412"]=261
distarr["413"]=397
distarr["414"]=80
distarr["415"]=378
distarr["416"]=34
distarr["417"]=346
distarr["418"]=187
distarr["419"]=260
distarr["420"]=366
distarr["421"]=217
distarr["422"]=295
distarr["423"]=212
distarr["424"]=336
distarr["425"]=315
distarr["426"]=296
distarr["427"]=224
distarr["428"]=95
distarr["429"]=106
distarr["430"]=270
distarr["431"]=296
distarr["432"]=162
distarr["433"]=322
distarr["434"]=301
distarr["435"]=238
distarr["436"]=138
distarr["437"]=31
distarr["438"]=237
distarr["439"]=179
distarr["440"]=228
distarr["441"]=284

//For Bentota
distarr["56"]=9
distarr["57"]=64
distarr["58"]=212
distarr["59"]=204
distarr["510"]=52
distarr["511"]=236
distarr["512"]=174
distarr["513"]=35
distarr["514"]=325
distarr["515"]=460
distarr["516"]=346
distarr["517"]=21
distarr["518"]=180
distarr["519"]=219
distarr["520"]=66
distarr["521"]=157
distarr["522"]=376
distarr["523"]=206
distarr["524"]=96
distarr["525"]=52
distarr["526"]=99
distarr["527"]=244
distarr["528"]=280
distarr["529"]=321
distarr["530"]=195
distarr["531"]=100
distarr["532"]=236
distarr["533"]=406
distarr["534"]=131
distarr["535"]=200
distarr["536"]=322
distarr["537"]=344
distarr["538"]=318
distarr["539"]=219
distarr["540"]=247
distarr["541"]=241

//For Beruwela
distarr["67"]=55
distarr["68"]=203
distarr["69"]=212
distarr["610"]=61
distarr["611"]=226
distarr["612"]=183
distarr["613"]=44
distarr["614"]=333
distarr["615"]=451
distarr["616"]=337
distarr["617"]=12
distarr["618"]=171
distarr["619"]=228
distarr["620"]=75
distarr["621"]=148
distarr["622"]=367
distarr["623"]=197
distarr["624"]=105
distarr["625"]=43
distarr["626"]=90
distarr["627"]=235
distarr["628"]=271
distarr["629"]=329
distarr["630"]=186
distarr["631"]=108
distarr["632"]=227
distarr["633"]=395
distarr["634"]=140
distarr["635"]=209
distarr["636"]=312
distarr["637"]=335
distarr["638"]=309
distarr["639"]=210
distarr["640"]=238
distarr["641"]=250

//For Colombo
distarr["78"]=148
distarr["79"]=205
distarr["710"]=116
distarr["711"]=172
distarr["712"]=238
distarr["713"]=99
distarr["714"]=320
distarr["715"]=396
distarr["716"]=282
distarr["717"]=43
distarr["718"]=116
distarr["719"]=283
distarr["720"]=130
distarr["721"]=93
distarr["722"]=312
distarr["723"]=142
distarr["724"]=160
distarr["725"]=12
distarr["726"]=35
distarr["727"]=180
distarr["728"]=216
distarr["729"]=322
distarr["730"]=131
distarr["731"]=101
distarr["732"]=169
distarr["733"]=340
distarr["734"]=195
distarr["735"]=254
distarr["736"]=257
distarr["737"]=280
distarr["738"]=254
distarr["739"]=222
distarr["740"]=183
distarr["741"]=305

//For Dambulla
distarr["89"]=206
distarr["810"]=264
distarr["811"]=25
distarr["812"]=298
distarr["813"]=247
distarr["814"]=248
distarr["815"]=248
distarr["816"]=133
distarr["817"]=191
distarr["818"]=72
distarr["819"]=318
distarr["820"]=176
distarr["821"]=55
distarr["822"]=164
distarr["823"]=47
distarr["824"]=309
distarr["825"]=160
distarr["826"]=129
distarr["827"]=150
distarr["828"]=68
distarr["829"]=270
distarr["830"]=140
distarr["831"]=174
distarr["832"]=24
distarr["833"]=192
distarr["834"]=307
distarr["835"]=296
distarr["836"]=109
distarr["837"]=132
distarr["838"]=106
distarr["839"]=237
distarr["840"]=86
distarr["841"]=342

//For Ella
distarr["910"]=232
distarr["911"]=230
distarr["912"]=109
distarr["913"]=245
distarr["914"]=133
distarr["915"]=452
distarr["916"]=180
distarr["917"]=179
distarr["918"]=133
distarr["919"]=110
distarr["920"]=216
distarr["921"]=175
distarr["922"]=370
distarr["923"]=159
distarr["924"]=187
distarr["925"]=220
distarr["926"]=222
distarr["927"]=56
distarr["928"]=242
distarr["929"]=129
distarr["930"]=262
distarr["931"]=106
distarr["932"]=230
distarr["933"]=397
distarr["934"]=151
distarr["935"]=88
distarr["936"]=284
distarr["937"]=178
distarr["938"]=312
distarr["939"]=29
distarr["940"]=288
distarr["941"]=134

//For Galle
distarr["1011"]=289
distarr["1012"]=122
distarr["1013"]=17
distarr["1014"]=307
distarr["1015"]=512
distarr["1016"]=383
distarr["1017"]=72
distarr["1018"]=232
distarr["1019"]=167
distarr["1020"]=13
distarr["1021"]=209
distarr["1022"]=428
distarr["1023"]=257
distarr["1024"]=45
distarr["1025"]=104
distarr["1026"]=151
distarr["1027"]=290
distarr["1028"]=332
distarr["1029"]=303
distarr["1030"]=248
distarr["1031"]=150
distarr["1032"]=288
distarr["1033"]=455
distarr["1034"]=80
distarr["1035"]=148
distarr["1036"]=373
distarr["1037"]=381
distarr["1038"]=370
distarr["1039"]=203
distarr["1040"]=299
distarr["1041"]=189

//For Habarana
distarr["1112"]=323
distarr["1113"]=272
distarr["1114"]=223
distarr["1115"]=222
distarr["1116"]=115
distarr["1117"]=215
distarr["1118"]=97
distarr["1119"]=345
distarr["1120"]=301
distarr["1121"]=79
distarr["1122"]=157
distarr["1123"]=72
distarr["1124"]=331
distarr["1125"]=183
distarr["1126"]=63
distarr["1127"]=174
distarr["1128"]=43
distarr["1129"]=250
distarr["1130"]=132
distarr["1131"]=198
distarr["1132"]=24
distarr["1133"]=182
distarr["1134"]=332
distarr["1135"]=322
distarr["1136"]=85
distarr["1137"]=112
distarr["1138"]=100
distarr["1139"]=254
distarr["1140"]=90
distarr["1141"]=365

//For Hambantota
distarr["1213"]=140
distarr["1214"]=184
distarr["1215"]=546
distarr["1216"]=262
distarr["1217"]=193
distarr["1218"]=245
distarr["1219"]=45
distarr["1220"]=108
distarr["1221"]=243
distarr["1222"]=462
distarr["1223"]=270
distarr["1224"]=77
distarr["1225"]=226
distarr["1226"]=273
distarr["1227"]=167
distarr["1228"]=323
distarr["1229"]=180
distarr["1230"]=330
distarr["1231"]=124
distarr["1232"]=322
distarr["1233"]=489
distarr["1234"]=43
distarr["1235"]=27
distarr["1236"]=367
distarr["1237"]=259
distarr["1238"]=404
distarr["1239"]=80
distarr["1240"]=358
distarr["1241"]=67

//For Hikkaduwa
distarr["1314"]=320
distarr["1315"]=494
distarr["1316"]=381
distarr["1317"]=56
distarr["1318"]=215
distarr["1319"]=184
distarr["1320"]=31
distarr["1321"]=191
distarr["1322"]=410
distarr["1323"]=241
distarr["1324"]=61
distarr["1325"]=87
distarr["1326"]=133
distarr["1327"]=278
distarr["1328"]=315
distarr["1329"]=316
distarr["1330"]=230
distarr["1331"]=133
distarr["1332"]=271
distarr["1333"]=438
distarr["1334"]=96
distarr["1335"]=165
distarr["1336"]=356
distarr["1337"]=379
distarr["1338"]=353
distarr["1339"]=216
distarr["1340"]=282
distarr["1341"]=207

//For Inginiyagala
distarr["1415"]=459
distarr["1416"]=114
distarr["1417"]=302
distarr["1418"]=204
distarr["1419"]=185
distarr["1420"]=291
distarr["1421"]=246
distarr["1422"]=375
distarr["1423"]=220
distarr["1424"]=262
distarr["1425"]=332
distarr["1426"]=355
distarr["1427"]=184
distarr["1428"]=175
distarr["1429"]=74
distarr["1430"]=333
distarr["1431"]=225
distarr["1432"]=242
distarr["1433"]=402
distarr["1434"]=226
distarr["1435"]=164
distarr["1436"]=219
distarr["1437"]=111
distarr["1438"]=317
distarr["1439"]=104
distarr["1440"]=308
distarr["1441"]=209

// For Jaffna
distarr["1516"]=348
distarr["1517"]=439
distarr["1518"]=320
distarr["1519"]=565
distarr["1520"]=524
distarr["1521"]=303
distarr["1522"]=218
distarr["1523"]=295
distarr["1524"]=557
distarr["1525"]=408
distarr["1526"]=375
distarr["1527"]=398
distarr["1528"]=283
distarr["1529"]=486
distarr["1530"]=269
distarr["1531"]=422
distarr["1532"]=262
distarr["1533"]=246
distarr["1534"]=555
distarr["1535"]=543
distarr["1536"]=237
distarr["1537"]=348
distarr["1538"]=142
distarr["1539"]=484
distarr["1540"]=234
distarr["1541"]=589

// For Kalkudha(Pasekudha)
distarr["1617"]=325
distarr["1618"]=196
distarr["1619"]=262
distarr["1620"]=370
distarr["1621"]=190
distarr["1622"]=266
distarr["1623"]=182
distarr["1624"]=339
distarr["1625"]=294
distarr["1626"]=262
distarr["1627"]=227
distarr["1628"]=65
distarr["1629"]=142
distarr["1630"]=242
distarr["1631"]=298
distarr["1632"]=132
distarr["1633"]=291
distarr["1634"]=304
distarr["1635"]=241
distarr["1636"]=108
distarr["1637"]=6
distarr["1638"]=210
distarr["1639"]=182
distarr["1640"]=199
distarr["1641"]=287

// For Kalutara
distarr["1718"]=159
distarr["1719"]=240
distarr["1720"]=87
distarr["1721"]=136
distarr["1722"]=355
distarr["1723"]=185
distarr["1724"]=117
distarr["1725"]=31
distarr["1726"]=78
distarr["1727"]=192
distarr["1728"]=259
distarr["1729"]=298
distarr["1730"]=174
distarr["1731"]=77
distarr["1732"]=215
distarr["1733"]=383
distarr["1734"]=152
distarr["1735"]=221
distarr["1736"]=300
distarr["1737"]=322
distarr["1738"]=298
distarr["1739"]=198
distarr["1740"]=226
distarr["1741"]=262

//For Kandy
distarr["1819"]=245
distarr["1820"]=246
distarr["1821"]=42
distarr["1822"]=237
distarr["1823"]=26
distarr["1824"]=276
distarr["1825"]=128
distarr["1826"]=99
distarr["1827"]=77
distarr["1828"]=140
distarr["1829"]=264
distarr["1830"]=129
distarr["1831"]=142
distarr["1832"]=92
distarr["1833"]=264
distarr["1834"]=275
distarr["1835"]=223
distarr["1836"]=182
distarr["1837"]=203
distarr["1838"]=179
distarr["1839"]=164
distarr["1840"]=157
distarr["1841"]=269

// For Kataragama
distarr["1920"]=153
distarr["1921"]=288
distarr["1922"]=483
distarr["1923"]=273
distarr["1924"]=123
distarr["1925"]=271
distarr["1926"]=318
distarr["1927"]=168
distarr["1928"]=324
distarr["1929"]=181
distarr["1930"]=376
distarr["1931"]=169
distarr["1932"]=342
distarr["1933"]=511
distarr["1934"]=86
distarr["1935"]=19
distarr["1936"]=367
distarr["1937"]=260
distarr["1938"]=425
distarr["1939"]=81
distarr["1940"]=399
distarr["1941"]=65


// For Koggala
distarr["2021"]=222
distarr["2022"]=442
distarr["2023"]=269
distarr["2024"]=30
distarr["2025"]=118
distarr["2026"]=164
distarr["2027"]=278
distarr["2028"]=246
distarr["2029"]=287
distarr["2030"]=261
distarr["2031"]=164
distarr["2032"]=302
distarr["2033"]=470
distarr["2034"]=65
distarr["2035"]=134
distarr["2036"]=385
distarr["2037"]=367
distarr["2038"]=382
distarr["2039"]=187
distarr["2040"]=313
distarr["2041"]=175

// For Kurunegala
distarr["2122"]=219
distarr["2123"]=68
distarr["2124"]=254
distarr["2125"]=105
distarr["2126"]=74
distarr["2127"]=119
distarr["2128"]=122
distarr["2129"]=306
distarr["2130"]=87
distarr["2131"]=119
distarr["2132"]=79
distarr["2133"]=246
distarr["2134"]=253
distarr["2135"]=270
distarr["2136"]=164
distarr["2137"]=187
distarr["2138"]=161
distarr["2139"]=206
distarr["2140"]=115
distarr["2141"]=311

// For Mannar
distarr["2223"]=211
distarr["2224"]=473
distarr["2225"]=324
distarr["2226"]=281
distarr["2227"]=314
distarr["2228"]=200
distarr["2229"]=401
distarr["2230"]=185
distarr["2231"]=338
distarr["2232"]=185
distarr["2233"]=27
distarr["2234"]=471
distarr["2235"]=461
distarr["2236"]=174
distarr["2237"]=264
distarr["2238"]=77
distarr["2239"]=402
distarr["2240"]=150
distarr["2241"]=507

// For Matale
distarr["2324"]=303
distarr["2325"]=154
distarr["2326"]=127
distarr["2327"]=103
distarr["2328"]=114
distarr["2329"]=292
distarr["2330"]=154
distarr["2331"]=167
distarr["2332"]=71
distarr["2333"]=238
distarr["2334"]=314
distarr["2335"]=251
distarr["2336"]=156
distarr["2337"]=179
distarr["2338"]=153
distarr["2339"]=192
distarr["2340"]=133
distarr["2341"]=297

//For Matara
distarr["2425"]=148
distarr["2426"]=195
distarr["2427"]=245
distarr["2428"]=377
distarr["2429"]=258
distarr["2430"]=293
distarr["2431"]=169
distarr["2432"]=331
distarr["2433"]=501
distarr["2434"]=35
distarr["2435"]=104
distarr["2436"]=418
distarr["2437"]=336
distarr["2438"]=414
distarr["2439"]=158
distarr["2440"]=343
distarr["2441"]=145

//For Mt. Lavinia
distarr["2526"]=47
distarr["2527"]=192
distarr["2528"]=228
distarr["2529"]=334
distarr["2530"]=143
distarr["2531"]=106
distarr["2532"]=181
distarr["2533"]=352
distarr["2534"]=183
distarr["2535"]=252
distarr["2536"]=269
distarr["2537"]=292
distarr["2538"]=266
distarr["2539"]=234
distarr["2540"]=195
distarr["2541"]=293

//For Negombo
distarr["2627"]=166
distarr["2628"]=196
distarr["2629"]=357
distarr["2630"]=96
distarr["2631"]=136
distarr["2632"]=153
distarr["2633"]=308
distarr["2634"]=230
distarr["2635"]=299
distarr["2636"]=237
distarr["2637"]=261
distarr["2638"]=235
distarr["2639"]=257
distarr["2640"]=148
distarr["2641"]=340

// For Nuwara Eliya
distarr["2728"]=217
distarr["2729"]=187
distarr["2730"]=206
distarr["2731"]=148
distarr["2732"]=174
distarr["2733"]=341
distarr["2734"]=210
distarr["2735"]=146
distarr["2736"]=259
distarr["2737"]=224
distarr["2738"]=256
distarr["2739"]=87
distarr["2740"]=234
distarr["2741"]=192

// For Polonnaruwa
distarr["2829"]=202
distarr["2830"]=175
distarr["2831"]=241
distarr["2832"]=67
distarr["2833"]=227
distarr["2834"]=365
distarr["2835"]=302
distarr["2836"]=129
distarr["2837"]=64
distarr["2838"]=142
distarr["2839"]=243
distarr["2840"]=134
distarr["2841"]=348

//For Pottuvil(Arugam Bay)
distarr["2930"]=377
distarr["2931"]=221
distarr["2932"]=268
distarr["2933"]=430
distarr["2934"]=222
distarr["2935"]=159
distarr["2936"]=246
distarr["2937"]=138
distarr["2938"]=344
distarr["2939"]=100
distarr["2940"]=335
distarr["2941"]=205

//For Puttalam
distarr["3031"]=206
distarr["3032"]=156
distarr["3033"]=212
distarr["3034"]=326
distarr["3035"]=354
distarr["3036"]=180
distarr["3037"]=240
distarr["3038"]=127
distarr["3039"]=295
distarr["3040"]=51
distarr["3041"]=400

// For Ratnapura
distarr["3132"]=198
distarr["3133"]=365
distarr["3134"]=133
distarr["3135"]=151
distarr["3136"]=283
distarr["3137"]=296
distarr["3138"]=280
distarr["3139"]=121
distarr["3140"]=234
distarr["3141"]=191

//For Sigiriya
distarr["3233"]=206
distarr["3234"]=331
distarr["3235"]=314
distarr["3236"]=109
distarr["3237"]=131
distarr["3238"]=124
distarr["3239"]=255
distarr["3240"]=100
distarr["3241"]=358

//For Talaimannar
distarr["3334"]=496
distarr["3335"]=489
distarr["3336"]=201
distarr["3337"]=291
distarr["3338"]=105
distarr["3339"]=430
distarr["3340"]=177
distarr["3341"]=535

//For Tangalle
distarr["3435"]=69
distarr["3436"]=408
distarr["3437"]=301
distarr["3438"]=412
distarr["3439"]=122
distarr["3440"]=369
distarr["3441"]=110

//For Tissamaharama
distarr["3536"]=345
distarr["3537"]=238
distarr["3538"]=403
distarr["3539"]=59
distarr["3540"]=380
distarr["3541"]=43

//For Trincomalee
distarr["3637"]=108
distarr["3638"]=97
distarr["3639"]=286
distarr["3640"]=146
distarr["3641"]=391

//For Valaichenai
distarr["3738"]=206
distarr["3739"]=179
distarr["3740"]=197
distarr["3741"]=284

//For Vavuniya
distarr["3839"]=344
distarr["3840"]=86
distarr["3841"]=449

//For Wellawaya
distarr["3940"]=321
distarr["3941"]=105

//For Wilpattu
distarr["4041"]=426

if(val1 > val2) {temp=val1;val1=val2;val2=temp;}

if (val1==val2){val3.value=0}
else {val3.value=distarr[val1.toString()+val2.toString()]}
val4.value=parseInt((val3.value)*0.6214)
}
