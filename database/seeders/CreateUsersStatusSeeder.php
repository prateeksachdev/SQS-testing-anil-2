<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUsersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users_status')->truncate();
        $users=[];
    
      $final = ["R6RT5AT0ZBFL","QM7G8MT9G6CQ","6RBM6TYE356F","C2WN8P8TLWYY","HS2KQZVMK1BL","GNMZKAFDZJ5M","8L7T955H1H7U","1AHR9SX18J9J","6DXJXE1G1F16","9ZJ92XYUF79L","SSMVPCY9Z6PZ","N12TFNDGTEXZ","UHUNHRFEP4CP","CN25JYKSV37E","SU6MPFCR6GDM","V69QFBQQSVXH","G6LT58QUG3ZH","BXM4HAU9EDHK","SSCNH2XNQPZ5","46WGRECAEWA1","NC5QVSL0LSWG","5HRHSUVCM39C","7G694PTBZTNX","6HCE2ZF8MEM5","M3X27TPFWB7E","WUXTANRD4E1S","PLZA4H608PYY","0XK0HAQ3VSXJ","Y4NGXTM71MWF","DZVG9QTG6RQN","NNV0344577YN","8L6XS4672H9C","ZZE7MS0DE185","7J5XV8FSARFA","VJ7MDVKU1DSF","7KGS8YBP1N5D","JW436Q01U9M0","JXWAG8H36N48","RSQKBFF0QR44","8SCPHJ86W9U6","D5FKRQYFEYAA","AJ7M1MBKHU2D","XNU6T64JG54Y","L5ZE5BHRHL61","92YB95A78AR1","HVPS7KXZENY4","ZCVXPDDL86K7","4Q3VNPK5FQ04","J7CRXT4BN7LS","DXXS23ZDS6T2","YX56PA75XV2J","V6W6MV9J8Y09","3G5UYLWFTBBG","B0WD6A4U5EY8","508NUPUT8ZPZ","5UZXSDWAM8SE","W4J1LTXRAHA3","EGD2H8D24GTB","KFE4QATHGD8J","B7YJ171X6Q0H","B3HWC7Z9YS6J","NUJJ53KGQQ8F","W1XWQ3VWV3S3","77R6ZBC8D6UT","R2G1J295P9GN","PYGBMUFYYDYP","DP7BMS340XKH","JM5HZXM78DX2","8RHTQR7KC5C6","Q0E6SDTLV1DQ","XMF2L08EAWUE","XY4YNZWTAPUH","PVNF6JG045V6","4UBRLA4E03GZ","UTX9Y0ZAB0CX","ZFT7FYKTU5K7","320JSB3WJZDX","VYB0YUTG851R","8JPB69S0GBHB","K3980CWVKUQH","5YUZUJQSFCTU","JXX680H8AJ5T","K7BPXL82U7BL","K2Y5MUWCMHCB","CSHTVV9DGVEK","17B1C2Y0AVXM","G266LXQXRBAV","MVLA6VALD7CU","WFLQA6RVNFCB","JXXJ8TE206J7","TU4680QB9VFH","5FZ7SVGHXTET","WJZ13WJ57TBG","NB3JETEZ7W63","T55TBAZYX8P9","1VUJSMZA6HWA","22CBD0YCQETP","1QW2GRRNUWWQ","3VU5CRZ6HQKV","EUHQ3BUQ64FH","JQ9VWT5XNRKX","4WENFMXF4LY0","DL071RDJRE8M","FB99FCE5G9DD","3ZRDHF46P6VA","CJQ1QULBSNWU","N7S7Z1PK6L4X","SZUVC4MLMLCQ","RADXF928C0WC","XSXF375PGWU8","FN7F1J0320A0","NRR8137TN4NA","84HYW7UV199Q","FR7YG52CSZDN","0YUQDKB5XKF2","FJFAB9PXMTKT","QF9K42ZZTCVZ","X5S3V827LZ2X","6JZE1RFD7TVV","X7GSJJKW2QQ6","AZ9WJ2822YYH","5AR9B62YFRGB","6FKX88SYW2V5","X47Z7ZEW02AJ","JHQLE72NJYP5","ENLJ0WR3ZBL3","DJ2K695TRV0B","77R44XX95U0H","FQSRN5425ZL6","NSHP1LWAFCQ1","TXZDE7HQ8657","NPTQZ4LABVR4","FTMDYJ80M7JW","KSECEN2FB5DF","WA91A98VL6VL","5HBE0YXHBLC3","VVD4XTAFLEW3","KLKZUHXNTPDF","7BAULPYJGTBT","7TRMFRTWJP5W","1A2W22VLSBEL","F023BPXGS6H5","YMR0JFW96TFV","BXFDR5ZXVZ6Q","Y1L2J6QXAM29","FQ9EHA6CYXH0","T5AXXCQS3456","STZ0BVTLF04S","910L61C9VXMQ","X1RW13QB3TH2","Z5Q05QFQF0VY","XRRK8MKFGHAY","4ZZ7UMXN8D1W","0639A0LV7HQN","8V79ZSBMYRPU","C2A8NG6XFNJ6","BDZ40L8U6PR8","30L8E0RYRCK9","KH0FVV6VTDK0","3GL0SG85VQDX","0Q76RH5BCKKA","271U9GSUJZVE","ATUN3U6EKWLV","8LKZKJSGCKMM","KEBYWHC9HR92","LMRB045QQ5BQ","K15Y1SU01R5R","EQL8TM1YL92R","TF7SUTEDRQMH","M95R8CMU59XD","MN4ABVR4U299","38KXFBN0WUYH","Z2QT11TFU9CK","RFXT8YL3LZ4K","RUKV5HZW7FKC","V6K29YUZRV90","6DD2VGR8J20C","9YVJ7E7WK8RM","PV11V8K608MS","X0NY8D6N3NW9","R6GAGFPBR8N2","GYDAEG3ZTBD8","3NCWEL9KGW0X","XLNS0XKBF5Z0","FCLVP7W1K10A","ENC4LDM3Q3YJ","U63CXNFBT5BC","3YZNKUX0F7AH","B78S80BNSR3B","WDHGET137KFA","KFW3E1ZQ33NK","5BCFT22PML5B","F04CLJW62F3X","SZPXEW5BETPC","3A4NR8V8E1Q4","WR1USMAU4T2Y","Y30LGPVR3345","9B65BLRTW0S7","B95XAUDX4W44","VV542DAD6YKT","CH5E9G4KZJB8","W16C29A3159K","M9U232AV2MHJ","YT1J1LZAQS6F","4DY359M4TX4G","VXRET0MLFG24","ZLETG9J1PRE8","UCMBVQKG78ZM","571GMEF2H0SM","XFY8MUNB2PBF","WR7M74K95F1Z","KCZ6T8QHMJKL","53C51SVTMSNH","BLKKN0G3SNAT","LDJ3ZDQ8F4DB","7MQN7NN7SRXF","QQTFXC1YRHW2","GAHYY14LD5FG","2XUMV4V5CPFP","94KKC8ENFHGS","P34AL6CBAXR4","9YFCXGW3R2MS","M3R2ZFTG1383","0B1C2NU45LQ6","31H66FNAFK75","25FVJRBPPNJS","MPX7RXLP8VZP","NK11PHN33ALW","U0WAZE09KZS1","SPJSTB6H2K7Q","MPAH49MRNC0R","1FRPSUFQ68DX","9EW67T633CBP","BN9SKEF1XVZX","B5UKQD5Y6MUH","GRXPTJJ3Y86Q","DSPPBMF2D1YS","LB09CJN837YW","W8FECFUYPQ1N","4DZDT6FFQ96G","982ABSHS2U3W","X8WB0AHD895W","U8JPZ2732KLE","AFUXH5Z3GSKX","STN1PHGWLS3H","79X3C5FB5JYN","7ZLA2177DFZE","ZWW4KLXA0QBS","TZJ9RMYEHB7U","YXH7PZ25HMMV","N84L5TL6AARD","WSRNGQF0TKVB","L8WQ4B0X5PMN","BRSC9HVG0F44","W3KZBB0DMXZB","RPDKWJWZ1TRU","M147CDCJ7DYA","JU2JQCLK29AV","B4VX9APM6LC1","1KW86NN5KR3S","76WZ7CVXK2M3","C1SAVPQ8Q6FH","UUA95P061P0J","MZRSMVCF00KA","1TW2FNCN2RA0","H8V88Q2QZ2V1","ZGSJ6RHD51S8","52NMP3F51RWJ","4C7C6FLK5XXQ","VSSFKDG6D8GY","Y231XHSVSSUS","9B38ABRVAFF0","HLKCWSQU1APN","KB3U1ETQT0RA","BK44BQZGHYQL","7F8RMUBUTBVQ","892E5JWR3GW8","Y56J2LY448Y2","Y378W2AY2LS0","TMV0DARDRET4","CMJUV85RVMU7","2089L7FZ5BL2","XQV56QJSNLAE","04G7VA9B8AVE","F1PX517HGT2B","1ZSJMDE3JPGZ","LPXHPM675X1P","78XCV1GRASPC","Z5EHSDPP1LVJ","5S75PM5DH7ER","MHVVW9UEPHG9","ZA6PW57KDZPE","VHA8HDF4LHWE","MHA9E7XBKHDL","7UDT9VM5KEAM","HXJYB1DNEZFC","V8U5LB0488AP","6QAY9UXBLEHV","LVMZBZKXX9T1","JT8WQLN9RZ5K","S8VPDU53UVMJ","ZN3UH98WM6HT","9CF4Q0DCEEZL","7UYPWD0U4X97","SPRNU7FCZ4G8","D0274VTMT6DN","A16TTBBUCX7K","6B8UM8FW4QJA","0M6NXUF3CAGM","3Q17AQMT8UPE","L7W57KDTCRJM","SC033EYJ359D","VXDJ58VBUXKG","XK49BZJB7P73","JSFV9CN44FYT","GDJMB0KN1ZV7","DR1WNZ574NF2","CWHVF7TZNVMS","6U68T63Q6ZHZ","F30TDSYVJ8GK","CWGR67270MSU","G30FB8YA62ZZ","0PMRNVQAMNYU","ZP3G28EVH14Z","PJYD0QHWMKNN","WFCDPV4Z5D2L","NW7U1828XP4X","UH0REKKRQEXN","34PJB436P5UW","2XECASSLMKSK","ECGAMX6DZ3BA","JXQTFSW6P9W4","CC9FC88E1C45","NWZJRMMSJP7G","4TLCSCHR9JMY","FQPCZ2VPCRNY","DW6ND3EDF16E","5T5YC977JN18","SRMXR3WZMH2M","Q3V6ACGJPY0F","634JRG84YH8D","0FDZUVW3JRSN","4FTLF42RK8ZH","4HTCKTF14RTP","PM30XUPEU0UM","BM5H0DSXA5EA","HJ2999WFY9UH","S6GD3UZ4BF1W","9K17N5M04MUC","FNAZUK7G9HA2","RFHG6WVHHZD2","99T6VF5Q9VSX","8WD0VV0RK770","YWCV6VCC3S47","1T4SDLMJ6UU9","WVQR2ESPS24Z","8PPBU79W2WB5","JQRWJZ7NND54","1GQLE45WDYVN","205ZFPDYGYWN","DGEBRDWQKYC0","WU6NGEUXDRCE","U35TGSWWQ7XT","QCG0RLKUMCBE","KR2QX7V6L14E","8AUE4JCC71SX","N5Q7L6W2C7PJ","0NXP2N13517B","P9JMH6KS9HNJ","NLZSH1TX5K3X","LH2F93D7UA7B","PMYP1F3NT5PN","EU0FSBMB0TAS","YE13AGGKXGYX","0L505M1AGLW3","RSQCBMU5Y3HV","CY2W8KCM1CU1","1QC6ZEDE3GCH","W7CVEEGATARX","NYF4V7PCCGLG","2MZMYZ7KPQQZ","SLXYXDDH370R","DF829PQ2FWZU","098T4VBEK96Z","VDLDKSTD1CWS","5X0SDT5FS0FV","JKGT2L1EYAUZ","LXT58Q8EQ1Q7","A8N6N7Z5GDL9","RJ964XRDR8C6","MD7Z6MNX8VVQ","T35KGXZ0061F","QDFHVY5Y9FG6","ZYMQPY8YCRRT","Z0GP4E9AQFZ2","3KF87T9534W6","G5EX4WBU6ZCN","STC5KDHW736U","4PZ7JHXPY5HU","3E9BP8FRDF5V","P027Z3M3L52H","PKNNDJN44Z3H","PDF3A0UJGDDF","WUGCR2F3LTCL","WLU4LNSH9XFW","0RZ66USHCT8W","FV67QPBKTS8G","R35Q2LC1XNP1","7KBUP86X1KL2","MZGB3BRU0X5B","UNFNREZ058U7","CGUANEPNWSYW","Q8128ZY37CS7","SU6VSHF2BVE7","2RN2PSLUFR4T","N5T64WDP3RQS","BWANB3UNX5VT","GT5XG8KVABS5","3TNHB9DWZZJ3","VY3B5S1QV21D","VGD881JKSVZK","9TYQHS2YFW92","DWHZF2H6ASEY","T5XNJPT65S3A","K8DGNXBSXNZN","6BWBLULFXRM4","53E4TWFW5PT5","ZTKNNWERLWG2","1ZYN9PPBUDYT","TCRMNKED012K","4DB4KL32BAN8","ULR0TS0BNAMC","EPWBKZNRRTRC","UBZ1875MUSRY","KURBJCN7R8BP","1LLEHJ6R4YMQ","6DYPM6SW8K98","TQ5LU2CS5MW0","KS55QV89SBFJ","P6ELDP35631A","0M03K6STQH5Z","FBXRA8FY9NX3","7Q5526MK26FF","1XABDDFZ085Q","FYHT99W3ADD2","N2WJ9S7CF0ZR","CGTPU02NRF7G","E54KMWMWNSF9","NKTXTMP1W516","1PUCMKDJEGC4","QGRPVLSZ4PP8","U9DSQL2BQ273","KW7UEXHX9M07","DZVHGAQ9MJJA","K5S0ZMR97YSE","H1BGXA84L02A","GW5DQ88ERD5K","2DUKTPP56UT1","SK2KNKLMXUXQ","4JMBA3YJLU9Q","6AMW9C9L4CFG","9HPSKZFSXAWT","9R6HTNSBRGPS","DZ5RZBGZZ5YA","C6FGXUGRAU0R","4HJ9CB93VPN4","LN56WFPHFH3F","80WQP6JZAJZQ","9HDZR22WY4PZ","MK31ZYM31GHZ","S4S06NJWZGP0","J1TWX6QZ7RUJ","D5JP3Z633CPR","CMJX13TDK3AS","PWJS21XH3NK1","MQ89MJAYVKSE","4RDGN2M53AQ8","WEK44K7VH8DR","6YQ6MSBRW5BD","4BXSCNJE81Q2","271S5ZUKCPA4","MFLXE1EGFWTA","38SNPH8CYR20","YW81SMUA7J2Q","TK1MM1S5AEWN","0MNGAX23B93J","K2XE95AAKYS9","3EN96AZ4Q5BP","6VDHLZJ13EQ9","MHLXKWMHUSB9","MGD52UYDGG0C","B92SN6BFR5E7","ZMK0WN8FV0PT","BYZ8008JPFW1","PPYER6PJLSU6","1VV4B00WCUT5","85LUS2G6MAVE","DP2G8BBNAPMH","2W22PD19L2K7","FJHPLPTVZX2Y","H1G1ZYZUF4YK","A2TJZGQJKUU3","MJQ35XBJBSN7","LVFPY53ET00U","T7BJ2E7VVEKV","J3XM0Z1MK42B","APW595J94NMV","1U3YYFU9K4NY","NY4TZJ0B7SCB","VBNC7KZMDWQ3","6QJMBHK52MA1","KCBHRZT5YH7F","VKHAK1ZF630R","EHZD8F1FZNV9","HWR0MTLUSMYQ","2QWPWXWX7ZWU","ZMFKNMS6CY6L","J2WWTHB414HM","ZA4SYQKYK0MH","1LJN90FHYCV2","2K494X4SDF1N","Z77ZGEXQHZ1C","8LX3922YVSGT","JQ4QPAMDS9PP","H1M4F1DCELLJ","U7F9UJRQQMJF","XN9GGEPY1CXV","BD49ZEB56VNX","ADGHTT3854DS","88KSQ6BZJKWF","QVHFF8VT80CV","PV784V39G6A4","PY6UR390QD6D","AD63K681UVBW","C34FD0Z3Z626","RD5EW675PX8G","GH4DFH2LPA77","P6X54Y92NNMF","LT6QNUYKKF2C","NMV359LL5ZZJ","AKTKYFSAEWPF","2M14NKBD2SFD","CVZ6A3MPKKR5","90E3LVC390ZS","C26PJW274CDW","3UYS80CRYYPX","VGNWS72BRVBK","VMNKUSU6KVH6","T7MMJ2KANZU5","E8ZSFU2FTPMV","THBHG7QG5DBU","PAJCEXAQC6RJ","SRCS2UEHR7YS","PFYP61VHD3BW","Z5NXLWBMTLD0","43WXQS19LMXD","7VM74AQN0SKB","Y6DCX848P7B4","1704VBT8VM9H","P6CZSGAG3NAF","D7BLXC7WSM12","FX2X4HFQXM3K","VDAXAYE3GYD3","MFS6AWDWQ99E","ADSYGS02YPEK","6ED8Q85FHX3S","3TMVTRW8J28X","M2M9F15EA679","JRVRK5BNU78D","F83ED18P9FNM","SDSCXJP6BK87","UT1KJUXGMW30","PCYQ489LKKZT","ZQMR73VKGNB3","T569JJAYWFV9","CC9KGXXTRWFT","8WF26M2Z3097","6XNR2SVEAQHP","LD52MF7CVW3V","RVNZT0G0DNTA","YA8GNA7Z2HNN","VADT8WY12A3C","CGTX68NJMJB9","UBVHP25C6ZSQ","KJL6ZLC3Q4C5","XJ5CJZWN6NUV","5BP2JGUDU8SC","NVNCTGPA90R4","5N4QDDVSBULN","8BLPWBHS47KE","TCG0TMLV51ES","5APHUATFCP0H","NGFZCFAFH106","55TDC2RVQZKS","NHAW0UR27U4E","W4CPFPWPLTVW","34BFDDVBTW1M","WBQK6LKZ22S7","6CVCJMXE2YVT","AWQEA3Z95GTU","KJXQPBBFA7H0","EW27PT4RMJ4Q","PJ95KPKC8TGH","YZMAW65H5HRC","8TK1VG1N03E0","5H29L53RJ22R","MTMLK7GGEMWX","7X9S431YBT8B","GK07SDA8687F","L0Q0DWGCKXE3","R20QXVA1TJ5A","LVF9AC0UMQ2Q","DY6V79S0LXB2","HGW83HCRT6K4","PXHMGNCG8BMJ","ZYF462PHDSU1","KYAXKFDZPUYW","PP2H3HNHNE4X","QPCDQ5TA5ET2","QXLTKCN7ZHSW","73H026M1UPX6","0JCZ39J73YTS","7KGRQBX3Z4FJ","9KVCREQSNTCR","GF0D2VKKK4SR","XCY1WS42UCFV","G23T3FJCT824","6YXEF5P4T5RP","VJC2XFUGNYEK","JPLXWJVBT140","SXMM088WK0G0","9DAASH86RR7Z","6M5RS9EXT0UU","7NMBGJ3J4M4E","MJXW1NDJNNVG","VC2DB1K3ARLJ","15ZFJTCUFK69","THX6JHSRNCJU","0X8G36FCXK9D","MP0JV5XH5WEP","AG8LNKU0LFH8","QT4QPHUJXQN6","RKY6XJY0TZJK","JMD39U4T78JB","PW709PHG7P6K","LP4Y5VT9Y2WC","VJTGGE6QXGN4","KPGTG4TBWXCH","1310CXXNL614","YA9PAVU7YS0X","YZVBEH1HNH3V","XWJQWEP9MEP0","KMPM7R8XPQHM","ND56UD16WM90","PG8HGAX40ZKQ","830STTK38JK6","ZQKCN0BNFUGG","T3PKACW90H92","4KLFM1E7QMQD","D4UKRCBR3FUK","6PUE5Y45W3AL","3MYAPMK2X9G2","S11GVLN78TGF","RLSXY9AKBCZ6","J0GMEJV5S5XG","LF9A99DSF8LU","CXM1QU8TBWB3","37G7P87DZN37","33JMK50STE7W","EK7QADY17QMT","0DKUQVYXCG4S","JE47U21BEAC4","ULX8NGZWGM8U","BR5AEMQBRVMR","4S6UTF8E9H5A","B89CSXL9TMP4","JDVRZQED7L09","JTC5MLV796CY","103MY8WLPT4D","V416HJ8R1TKM","RZ2PEZMC6F2Z","MDL6W1D3CTMS","HVEG6Q44YGB1","8CH6W83UCUN8","YHUSL9M0BB6Y","0PJXSYPHG8NW","WFYBNAB5CNLC","SVHV7HAUYF5P","R0WU0Q0PLJLC","8NQYW9CU28SZ","FA6FWAFR4LFS","BBQGEQEV3E73","QVTFR45JUDH6","FPHGXZ4V53N1","LKU4ABLK9SE1","6J53443Z5TEW","UJKPJPGNQNQG","U0EJGSWMUF7F","ZL1821SHLD70","CDXZCFCBXM1U","QYQ84L6DW0VP","KGYLNUMENNYF","3JT6VM0YHT7M","TU9E7C0TD2NH","9XLF2QUEFLLC","14MQ0PJP61GF","BD68R1QH4YXC","CZQZYUFYRJ15","99KU531TTPHT","QT9QQX2NGN8T","KR7KEP30MJ7C","KLMFP25T8S0F","MGHNJTLQJS2K","S2K9NN3K7SBN","VM02Z4W47XQW","9AZW4WH8BAW0","X8RKCVTFM3M4","YZKY4RYUMKR2","BLCDJHUX5C9G","VG9BVY39FXYN","MZGZD4WW53NP","FLPFMGPJQQC1","F20V7TLMXMPD","L1RB83W1PMES","DMLWB7G7EYXH","E2RA5G9G7JA0","60LBJ543ZZ58","EMYDJWARE9GL","B1AMK4XMZUNT","JF6KAQMW8YU3","S6ME3TAFRE3P","GM4LECCTHXH2","AFRWJK1SZ059","QVC1BDEKE1JQ","2RCH2191VVYQ","30PSH5VHTGEV","MKD1TY85M1EJ","8TKBZT74BUUL","BVWZYHZ0DR6E","E7ZZAF8V58D6","GR7P4YZHL64M","C9SFLGM1211Q","QBRSE0LG7YJH","SZZPEFL9YKJX","5GFC1ZGBD6YM","TTRTURRBGM02","X3RT81BZKEZ2","U73EVDRUYT2P","B6LUAZCXAYPK","WL8TNNL3LQ82","DN30TP1UGZHJ","844S77Q1LXQS","Q1HGWJS6PG6A","8L5YNC3P7R5F","C9SSC8E7BEHR","80J57EUHUJEJ","73BVD1Z953D2","AZT59WDEPU9Y","7VWL71EUBMP2","1JVBLH17PWVJ","KTD31Z5TJJ99","3VT619DER3NT","64LE0JF17HYU","VUHYUZH88H1R","C2WN8P8TLWYY_TS","HS2KQZVMK1BL_TS","GNMZKAFDZJ5M_TS","8L7T955H1H7U_TS","1AHR9SX18J9J_TS","6DXJXE1G1F16_TS","9ZJ92XYUF79L_TS","SSMVPCY9Z6PZ_TS","N12TFNDGTEXZ_TS","UHUNHRFEP4CP_TS","CN25JYKSV37E_TS","SU6MPFCR6GDM_TS","V69QFBQQSVXH_TS","G6LT58QUG3ZH_TS","BXM4HAU9EDHK_TS","SSCNH2XNQPZ5_TS","46WGRECAEWA1_TS","NC5QVSL0LSWG_TS","5HRHSUVCM39C_TS","7G694PTBZTNX_TS","V416HJ8R1TKM_TS","RZ2PEZMC6F2Z_TS","MDL6W1D3CTMS_TS","HVEG6Q44YGB1_TS","8CH6W83UCUN8_TS","YHUSL9M0BB6Y_TS","0PJXSYPHG8NW_TS","WFYBNAB5CNLC_TS","SVHV7HAUYF5P_TS","R0WU0Q0PLJLC_TS","8NQYW9CU28SZ_TS","FA6FWAFR4LFS_TS","BBQGEQEV3E73_TS","QVTFR45JUDH6_TS","FPHGXZ4V53N1_TS","LKU4ABLK9SE1_TS","6J53443Z5TEW_TS","UJKPJPGNQNQG_TS","U0EJGSWMUF7F_TS","ZL1821SHLD70_TS","CDXZCFCBXM1U_TS","QYQ84L6DW0VP_TS","KGYLNUMENNYF_TS","3JT6VM0YHT7M_TS","TU9E7C0TD2NH_TS","9XLF2QUEFLLC_TS","14MQ0PJP61GF_TS","BD68R1QH4YXC_TS","CZQZYUFYRJ15_TS","99KU531TTPHT_TS","QT9QQX2NGN8T_TS","KR7KEP30MJ7C_TS","KLMFP25T8S0F_TS","MGHNJTLQJS2K_TS","S2K9NN3K7SBN_TS","VM02Z4W47XQW_TS","9AZW4WH8BAW0_TS","X8RKCVTFM3M4_TS","YZKY4RYUMKR2_TS","BLCDJHUX5C9G_TS","VG9BVY39FXYN_TS","MZGZD4WW53NP_TS","FLPFMGPJQQC1_TS","F20V7TLMXMPD_TS","L1RB83W1PMES_TS","DMLWB7G7EYXH_TS","E2RA5G9G7JA0_TS","60LBJ543ZZ58_TS","EMYDJWARE9GL_TS","B1AMK4XMZUNT_TS","JF6KAQMW8YU3_TS","S6ME3TAFRE3P_TS","GM4LECCTHXH2_TS","AFRWJK1SZ059_TS","QVC1BDEKE1JQ_TS","2RCH2191VVYQ_TS","30PSH5VHTGEV_TS","MKD1TY85M1EJ_TS","8TKBZT74BUUL_TS","BVWZYHZ0DR6E_TS","E7ZZAF8V58D6_TS","GR7P4YZHL64M_TS","C9SFLGM1211Q_TS","QBRSE0LG7YJH_TS","SZZPEFL9YKJX_TS","5GFC1ZGBD6YM_TS","TTRTURRBGM02_TS","X3RT81BZKEZ2_TS","U73EVDRUYT2P_TS","PM30XUPEU0UM_TS","BM5H0DSXA5EA_TS","HJ2999WFY9UH_TS","S6GD3UZ4BF1W_TS","9K17N5M04MUC_TS","FNAZUK7G9HA2_TS","RFHG6WVHHZD2_TS","99T6VF5Q9VSX_TS","8WD0VV0RK770_TS","YWCV6VCC3S47_TS","1T4SDLMJ6UU9_TS","WVQR2ESPS24Z_TS","8PPBU79W2WB5_TS","JQRWJZ7NND54_TS","1GQLE45WDYVN_TS","205ZFPDYGYWN_TS","DGEBRDWQKYC0_TS","WU6NGEUXDRCE_TS","U35TGSWWQ7XT_TS","QCG0RLKUMCBE_TS","KR2QX7V6L14E_TS","8AUE4JCC71SX_TS","N5Q7L6W2C7PJ_TS","0NXP2N13517B_TS","P9JMH6KS9HNJ_TS","NLZSH1TX5K3X_TS","LH2F93D7UA7B_TS","PMYP1F3NT5PN_TS","EU0FSBMB0TAS_TS","YE13AGGKXGYX_TS","0L505M1AGLW3_TS","RSQCBMU5Y3HV_TS","CY2W8KCM1CU1_TS","1QC6ZEDE3GCH_TS","W7CVEEGATARX_TS","NYF4V7PCCGLG_TS","2MZMYZ7KPQQZ_TS","SLXYXDDH370R_TS","DF829PQ2FWZU_TS","098T4VBEK96Z_TS","VDLDKSTD1CWS_TS","5X0SDT5FS0FV_TS","JKGT2L1EYAUZ_TS","LXT58Q8EQ1Q7_TS","A8N6N7Z5GDL9_TS","RJ964XRDR8C6_TS","MD7Z6MNX8VVQ_TS","T35KGXZ0061F_TS","QDFHVY5Y9FG6_TS","ZYMQPY8YCRRT_TS","Z0GP4E9AQFZ2_TS","3KF87T9534W6_TS","G5EX4WBU6ZCN_TS","STC5KDHW736U_TS","4PZ7JHXPY5HU_TS","3E9BP8FRDF5V_TS","P027Z3M3L52H_TS","PKNNDJN44Z3H_TS","PDF3A0UJGDDF_TS","WUGCR2F3LTCL_TS","WLU4LNSH9XFW_TS","0RZ66USHCT8W_TS","FV67QPBKTS8G_TS","R35Q2LC1XNP1_TS","7KBUP86X1KL2_TS","MZGB3BRU0X5B_TS","UNFNREZ058U7_TS","CGUANEPNWSYW_TS","Q8128ZY37CS7_TS","SU6VSHF2BVE7_TS","2RN2PSLUFR4T_TS","N5T64WDP3RQS_TS","BWANB3UNX5VT_TS","GT5XG8KVABS5_TS","3TNHB9DWZZJ3_TS","VY3B5S1QV21D_TS","VGD881JKSVZK_TS","9TYQHS2YFW92_TS","DWHZF2H6ASEY_TS","T5XNJPT65S3A_TS","K8DGNXBSXNZN_TS","6BWBLULFXRM4_TS","53E4TWFW5PT5_TS","ZTKNNWERLWG2_TS","1ZYN9PPBUDYT_TS","TCRMNKED012K_TS","4DB4KL32BAN8_TS","ULR0TS0BNAMC_TS","EPWBKZNRRTRC_TS","UBZ1875MUSRY_TS","KURBJCN7R8BP_TS","1LLEHJ6R4YMQ_TS","6DYPM6SW8K98_TS","TQ5LU2CS5MW0_TS","KS55QV89SBFJ_TS","P6ELDP35631A_TS","0M03K6STQH5Z_TS","FBXRA8FY9NX3_TS","7Q5526MK26FF_TS","1XABDDFZ085Q_TS","FYHT99W3ADD2_TS","N2WJ9S7CF0ZR_TS","CGTPU02NRF7G_TS","E54KMWMWNSF9_TS","NKTXTMP1W516_TS","1PUCMKDJEGC4_TS","QGRPVLSZ4PP8_TS","U9DSQL2BQ273_TS","KW7UEXHX9M07_TS","DZVHGAQ9MJJA_TS","K5S0ZMR97YSE_TS","H1BGXA84L02A_TS","GW5DQ88ERD5K_TS","2DUKTPP56UT1_TS","SK2KNKLMXUXQ_TS","4JMBA3YJLU9Q_TS","6AMW9C9L4CFG_TS","9HPSKZFSXAWT_TS","9R6HTNSBRGPS_TS","DZ5RZBGZZ5YA_TS","C6FGXUGRAU0R_TS","4HJ9CB93VPN4_TS","LN56WFPHFH3F_TS","80WQP6JZAJZQ_TS","9HDZR22WY4PZ_TS","MK31ZYM31GHZ_TS","S4S06NJWZGP0_TS","J1TWX6QZ7RUJ_TS","D5JP3Z633CPR_TS","CMJX13TDK3AS_TS","PWJS21XH3NK1_TS","MQ89MJAYVKSE_TS","4RDGN2M53AQ8_TS","WEK44K7VH8DR_TS","6YQ6MSBRW5BD_TS","4BXSCNJE81Q2_TS","271S5ZUKCPA4_TS","MFLXE1EGFWTA_TS","38SNPH8CYR20_TS","YW81SMUA7J2Q_TS","TK1MM1S5AEWN_TS","0MNGAX23B93J_TS","K2XE95AAKYS9_TS","3EN96AZ4Q5BP_TS","6VDHLZJ13EQ9_TS","MHLXKWMHUSB9_TS","MGD52UYDGG0C_TS"];
      
      $uId=1;
      for($i=0;$i<30;$i++){
        if(($i % 5)== 0 && $i !=0){
          $uId= $uId+1;
        }
        $users[$i]['user_id']=$uId;
        $users[$i]['created_at']=now();
        $users[$i]['scan_code'] = $final[$i];
        }

        DB::table('users_status')->insert($users);
    }
}
