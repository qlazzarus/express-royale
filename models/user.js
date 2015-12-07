/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var passportLocalMongoose = require('passport-local-mongoose');
    var Schema = mongoose.Schema;

    /*
     #초기능력
     $att = int(rand(5)) + 8 ;
     $def = int(rand(5)) + 8 ;
     $hit = int(rand(20)) + 90 ;
     $mhit = $hit ;
     $kill=0;
     $sta = $maxsta ;
     $level=1; $exp = $baseexp+$lvinc*$level;
     $death = $msg = "";
     $sts = "정상"; $pls=0;
     $tactics = "보통" ;
     $endtime = 0 ;
     $log = "";
     $dmes = "" ; $bid = "" ; $inf = "" ;

     #초기 아이템&초기배포무기
     $item[0] = "빵<>SH"; $eff[0] = 20; $itai[0] = 2;
     $item[1] = "물<>HH"; $eff[1] = 20; $itai[1] = 2;
     $item[2] = $w_wep; $eff[2] = $w_att; $itai[2] = $w_tai;

     $wep = "맨손<>WP";
     $watt = 0;
     $wtai = "∞" ;

     if ($sex2 eq "남자" ) {
     $bou = "교복<>DBN";
     } else {
     $bou = "세라복<>DBN";
     }
     $bdef = 5;
     $btai = 30;

     $bou_h = $bou_f = $bou_a = "없음" ;
     $bdef_h = $bdef_f = $bdef_a = 0;
     $btai_h = $btai_f = $btai_a = 0 ;

     #탄 또는 화살 지급
     if ($w_wep =~ /<>WG/) { #?
     $item[3] = "탄환<>Y"; $eff[3] = 24; $itai[3] = 1;
     $item[4] = $st_item; $eff[4] = $st_eff; $itai[4] = $st_tai;
     } elsif ($w_wep =~ /<>WA/) {    #矢
     $item[3] = "화살<>Y"; $eff[3] = 24; $itai[3] = 1;
     $item[4] = $st_item; $eff[4] = $st_eff; $itai[4] = $st_tai;
     } else {
     $item[3] = $st_item; $eff[3] = $st_eff; $itai[3] = $st_tai;
     }

     &CLUBMAKE ; #반 작성

     # IP Address & Host name 기록
     local($we) = $ENV{'REMOTE_ADDR'};
     local($wf) = &GetHostName($ENV{'REMOTE_ADDR'});

     #유저 파일
     open(DB,"$user_file");seek(DB,0,0); @userlist=<DB>;close(DB);

     $newuser = "
        $id2,
        $password2,
        $f_name2,
        $l_name2,
        $sex2,
        $cl,
        $no,
        $endtime,
        $att,
        $def,
        $hit,
        $mhit,
        $level,
        $exp,
        $sta,
        $wep,
        $watt,
        $wtai,
        $bou,
        $bdef,
        $btai,
        $bou_h,
        $bdef_h,
        $btai_h,
        $bou_f,
        $bdef_f,
        $btai_f,
        $bou_a,
        $bdef_a,
        $btai_a,
        $tactics,
        $death,
        $msg2,
        $sts,
        $pls,
        $kill,
        $icon2,
        $item[0], $eff[0], $itai[0],
        $item[1], $eff[1], $itai[1],
        $item[2], $eff[2], $itai[2],
        $item[3], $eff[3], $itai[3],
        $item[4], $eff[4], $itai[4],
        $item[5], $eff[5], $itai[5],
        $log,
        $dmes2,
        $bid,
        $club,
        $wn,
        $wp,
        $wa,
        $wg,
        $we,
        $wc,
        $wd,
        $wb,
        $wf,
        $ws,
        $com2,
        $inf,\n" ;
     */

    var User = new Schema({
        username: {type:String, unique:true, required:true, dropDups:true},
        password: {type:String, required:true},
        userGender: Boolean,
        userIcon: String,
        ip: String,

        loggedAt: Date,
        registerAt: Date,

        // passport properties
        last: Number,  // last-login attempt
        attempts: Number,   // login attempt
    });

    User.plugin(passportLocalMongoose, require('../config/passport'));
    return mongoose.model('User', User);
};