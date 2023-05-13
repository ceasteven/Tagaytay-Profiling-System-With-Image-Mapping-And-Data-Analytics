window.onload = function() {
    var watersupplySelect = document.getElementById('watersupply');
var waternumInput = document.getElementById('waternum');

if (watersupplySelect.value == 'Own use faucet, community water system' || watersupplySelect.value == '' || watersupplySelect.value == 'Peddler' || watersupplySelect.value == 'Bottled water') {
    waternumInput.disabled = true;
} else {
    waternumInput.disabled = false;
}

watersupplySelect.onchange = function() {
    if (this.value == 'Own use faucet, community water system' || this.value == '' || this.value == 'Peddler' || this.value == 'Bottled water') {
        waternumInput.disabled = true;
    } else {
        waternumInput.disabled = false;
    }
}

var tenureSelect = document.getElementById('tenure');
var rentnpmInput = document.getElementById('rentnpm');

if (tenureSelect.value == 'Rent house or room including lot' || tenureSelect.value == '' || tenureSelect.value == ' Living in a public space with rent' || tenureSelect.value == '') {
    rentnpmInput.disabled = true;
} else {
    rentnpmInput.disabled = false;
}

tenureSelect.onchange = function() {
    if (this.value == 'Rent house or room including lot' || this.value == '' || this.value == ' Living in a public space with rent' || this.value == '') {
        rentnpmInput.disabled = true;
    } else {
        rentnpmInput.disabled = false;
    }
}

var electricSelect = document.getElementById('electric');
var electricSrcInput = document.getElementById('electricsrc');
var generatorInput = document.getElementById('generator');
var solarInput = document.getElementById('solar');
var batteryInput = document.getElementById('battery');
var electricoInput = document.getElementById('electrico');

if (electricSelect.value == 'No' || electricSelect.value == '') {
    electricSrcInput.disabled = true;
    generatorInput.disabled = true;
    solarInput.disabled = true;
    batteryInput.disabled = true;
    electricoInput.disabled = true;
} else {
    electricSrcInput.disabled = false;
    generatorInput.disabled = false;
    solarInput.disabled = false;
    batteryInput.disabled = false;
    electricoInput.disabled = false;
}

electricSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        electricSrcInput.disabled = true;
        generatorInput.disabled = true;
        solarInput.disabled = true;
        batteryInput.disabled = true;
        electricoInput.disabled = true;
    } else {
        electricSrcInput.disabled = false;
        generatorInput.disabled = false;
        solarInput.disabled = false;
        batteryInput.disabled = false;
        electricoInput.disabled = false;
    }
}


    var landagriSelect = document.getElementById('landagri');
    var landagrinumInput = document.getElementById('landagrinum');

    if (landagriSelect.value == 'No' || landagriSelect.value == '') {
        landagrinumInput.disabled = true;
    } else {
        landagrinumInput.disabled = false;
    }

    landagriSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            landagrinumInput.disabled = true;
        } else {
            landagrinumInput.disabled = false;
        }
    }

    var landresSelect = document.getElementById('landres');
    var landresnumInput = document.getElementById('landresnum');

    if (landresSelect.value == 'No' || landresSelect.value == '') {
        landresnumInput.disabled = true;
    } else {
        landresnumInput.disabled = false;
    }

    landresSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            landresnumInput.disabled = true;
        } else {
            landresnumInput.disabled = false;
        }
    }

    var landcomSelect = document.getElementById('landcom');
    var landcomnumInput = document.getElementById('landcomnum');

    if (landcomSelect.value == 'No' || landcomSelect.value == '') {
        landcomnumInput.disabled = true;
    } else {
        landcomnumInput.disabled = false;
    }

    landcomSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            landcomnumInput.disabled = true;
        } else {
            landcomnumInput.disabled = false;
        }
    }

    var carSelect = document.getElementById('car');
    var carnumInput = document.getElementById('carnum');

    if (carSelect.value == 'No' || carSelect.value == '') {
        carnumInput.disabled = true;
    } else {
        carnumInput.disabled = false;
    }

    carSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            carnumInput.disabled = true;
        } else {
            carnumInput.disabled = false;
        }
    }
    var tricycleSelect = document.getElementById('tricycle');
    var tricycleNumInput = document.getElementById('trciyclenum');

    if (tricycleSelect.value == 'No' || tricycleSelect.value == '') {
        tricycleNumInput.disabled = true;
    } else {
        tricycleNumInput.disabled = false;
    }

    tricycleSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            tricycleNumInput.disabled = true;
        } else {
            tricycleNumInput.disabled = false;
        }
    }

    var bicycleSelect = document.getElementById('bicycle');
    var bicycleNumInput = document.getElementById('bicyclenum');

    if (bicycleSelect.value == 'No' || bicycleSelect.value == '') {
        bicycleNumInput.disabled = true;
    } else {
        bicycleNumInput.disabled = false;
    }

    bicycleSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            bicycleNumInput.disabled = true;
        } else {
            bicycleNumInput.disabled = false;
        }
    }

    var pediSelect = document.getElementById('pedi');
    var pediNumInput = document.getElementById('pedinum');

    if (pediSelect.value == 'No' || pediSelect.value == '') {
        pediNumInput.disabled = true;
    } else {
        pediNumInput.disabled = false;
    }

    pediSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            pediNumInput.disabled = true;
        } else {
            pediNumInput.disabled = false;
        }
    }

    var tvSelect = document.getElementById('tv');
    var tvNumInput = document.getElementById('tvnum');

    if (tvSelect.value == 'No' || tvSelect.value == '') {
        tvNumInput.disabled = true;
    } else {
        tvNumInput.disabled = false;
    }

    tvSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            tvNumInput.disabled = true;
        } else {
            tvNumInput.disabled = false;
        }
    }

    var casetteSelect = document.getElementById('casette');
    var casetteNumInput = document.getElementById('casettenum');

    if (casetteSelect.value == 'No' || casetteSelect.value == '') {
        casetteNumInput.disabled = true;
    } else {
        casetteNumInput.disabled = false;
    }

    casetteSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            casetteNumInput.disabled = true;
        } else {
            casetteNumInput.disabled = false;
        }
    }

    var dvdSelect = document.getElementById('dvd');
    var dvdNumInput = document.getElementById('dvdnum');

    if (dvdSelect.value == 'No' || dvdSelect.value == '') {
        dvdNumInput.disabled = true;
    } else {
        dvdNumInput.disabled = false;
    }

    dvdSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            dvdNumInput.disabled = true;
        } else {
            dvdNumInput.disabled = false;
        }
    }
    var karaokeSelect = document.getElementById('karaoke');
    var karaokeNumInput = document.getElementById('karaokenum');

    if (karaokeSelect.value == 'No' || karaokeSelect.value == '') {
        karaokeNumInput.disabled = true;
    } else {
        karaokeNumInput.disabled = false;
    }

    karaokeSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            karaokeNumInput.disabled = true;
        } else {
            karaokeNumInput.disabled = false;
        }
    }

    var cellSelect = document.getElementById('cell');
    var cellNumInput = document.getElementById('cellnum');

    if (cellSelect.value == 'No' || cellSelect.value == '') {
        cellNumInput.disabled = true;
    } else {
        cellNumInput.disabled = false;
    }

    cellSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            cellNumInput.disabled = true;
        } else {
            cellNumInput.disabled = false;
        }
    }

    var telSelect = document.getElementById('tel');
    var telNumInput = document.getElementById('telnum');

    if (telSelect.value == 'No' || telSelect.value == '') {
        telNumInput.disabled = true;
    } else {
        telNumInput.disabled = false;
    }

    telSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            telNumInput.disabled = true;
        } else {
            telNumInput.disabled = false;
        }
    }

    var compSelect = document.getElementById('comp');
    var compNumInput = document.getElementById('compnum');

    if (compSelect.value == 'No' || compSelect.value == '') {
        compNumInput.disabled = true;
    } else {
        compNumInput.disabled = false;
    }

    compSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            compNumInput.disabled = true;
        } else {
            compNumInput.disabled = false;
        }
    }

    var fanSelect = document.getElementById('fan');
    var fanNumInput = document.getElementById('fannum');

    if (fanSelect.value == 'No' || fanSelect.value == '') {
        fanNumInput.disabled = true;
    } else {
        fanNumInput.disabled = false;
    }

    fanSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            fanNumInput.disabled = true;
        } else {
            fanNumInput.disabled = false;
        }
    }

    var airconSelect = document.getElementById('aircon');
    var airconNumInput = document.getElementById('airconum');

    if (airconSelect.value == 'No' || airconSelect.value == '') {
        airconNumInput.disabled = true;
    } else {
        airconNumInput.disabled = false;
    }

    airconSelect.onchange = function() {
        if (this.value == 'No' || this.value == '') {
            airconNumInput.disabled = true;
        } else {
            airconNumInput.disabled = false;
        }
    }

    var ironSelect = document.getElementById('iron');
    var ironNumInput = document.getElementById('ironnum');

    if (ironSelect.value == 'No' || ironSelect.value == '') {
        ironNumInput.disabled = true;
    } else {
        ironNumInput.disabled = false;
    }

    ironSelect.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            ironNumInput.disabled = true;
        } else {
            ironNumInput.disabled = false;
        }
    }
        var washing = document.getElementById('washing');
    var washingnum = document.getElementById('washingnum');

    if (washing.value == 'No' || washing.value == '') {
        washingnum.disabled = true;
    } else {
        washingnum.disabled = false;
    }

    washing.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            washingnum.disabled = true;
        } else {
            washingnum.disabled = false;
        }
    }
        var ref = document.getElementById('ref');
    var refnum = document.getElementById('refnum');

    if (ref.value == 'No' || ref.value == '') {
        refnum.disabled = true;
    } else {
        refnum.disabled = false;
    }

    ref.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            refnum.disabled = true;
        } else {
            refnum.disabled = false;
        }
    }
       var stove = document.getElementById('stove');
    var stovenum = document.getElementById('stovenum');

    if (stove.value == 'No' || stove.value == '') {
        stovenum.disabled = true;
    } else {
        stovenum.disabled = false;
    }

    stove.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            stovenum.disabled = true;
        } else {
            stovenum.disabled = false;
        }
    }
      var rice = document.getElementById('rice');
    var ricenum = document.getElementById('ricenum');

    if (rice.value == 'No' || rice.value == '') {
        ricenum.disabled = true;
    } else {
        ricenum.disabled = false;
    }

    rice.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            ricenum.disabled = true;
        } else {
            ricenum.disabled = false;
        }
    }
    var oven = document.getElementById('oven');
    var ovennum = document.getElementById('ovennum');

    if (oven.value == 'No' || oven.value == '') {
        ovennum.disabled = true;
    } else {
        ovennum.disabled = false;
    }

    oven.onchange = function(){
        if (this.value == 'No' || this.value == '') {
            ovennum.disabled = true;
        } else {
            ovennum.disabled = false;
        }
    }

    var toaster = document.getElementById('toaster');
var toasternum = document.getElementById('toasternum');

if (toaster.value == 'No' || toaster.value == '') {
    toasternum.disabled = true;
} else {
    toasternum.disabled = false;
}

toaster.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        toasternum.disabled = true;
    } else {
        toasternum.disabled = false;
    }
}

var dispenser = document.getElementById('dispenser');
var dispensernum = document.getElementById('dispensernum');

if (dispenser.value == 'No' || dispenser.value == '') {
    dispensernum.disabled = true;
} else {
    dispensernum.disabled = false;
}

dispenser.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        dispensernum.disabled = true;
    } else {
        dispensernum.disabled = false;
    }
}


var sala = document.getElementById('sala');
var salanum = document.getElementById('salanum');

if (sala.value == 'No' || sala.value == '') {
    salanum.disabled = true;
} else {
    salanum.disabled = false;
}

sala.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        salanum.disabled = true;
    } else {
        salanum.disabled = false;
    }
}

var mats = document.getElementById('mats');
var matsnum = document.getElementById('matsnum');

if (mats.value == 'No' || mats.value == '') {
    matsnum.disabled = true;
} else {
    matsnum.disabled = false;
}

mats.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        matsnum.disabled = true;
    } else {
        matsnum.disabled = false;
    }
}

var folding = document.getElementById('folding');
var foldingnum = document.getElementById('foldingnum');

if (folding.value == 'No' || folding.value == '') {
    foldingnum.disabled = true;
} else {
    foldingnum.disabled = false;
}

folding.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        foldingnum.disabled = true;
    } else {
        foldingnum.disabled = false;
    }
}

var sofa = document.getElementById('sofa');
var sofanum = document.getElementById('sofanum');

if (sofa.value == 'No' || sofa.value == '') {
    sofanum.disabled = true;
} else {
    sofanum.disabled = false;
}

sofa.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        sofanum.disabled = true;
    } else {
        sofanum.disabled = false;
    }
}
var house = document.getElementById('house');
var houseinsurance = document.getElementById('houseinsurance');

if (house.value == 'No' || house.value == '') {
    houseinsurance.disabled = true;
} else {
    houseinsurance.disabled = false;
}

house.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        houseinsurance.disabled = true;
    } else {
        houseinsurance.disabled = false;
    }
}

var motor = document.getElementById('motor');
var motorinsurance = document.getElementById('motorinsurance');

if (motor.value == 'No' || motor.value == '') {
    motorinsurance.disabled = true;
} else {
    motorinsurance.disabled = false;
}

motor.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        motorinsurance.disabled = true;
    } else {
        motorinsurance.disabled = false;
    }
}


var app = document.getElementById('app');
var appinsurance = document.getElementById('appinsurance');

if (app.value == 'No' || app.value == '') {
    appinsurance.disabled = true;
} else {
    appinsurance.disabled = false;
}

app.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        appinsurance.disabled = true;
    } else {
        appinsurance.disabled = false;
    }
}
var gcollection = document.getElementById('gcollection');
var gcollect = document.getElementById('gcollect');
var gnum = document.getElementById('gnum');

if (gcollection.value == 'No' || gcollection.value == '') {
    gcollect.disabled = true;
    gnum.disabled = true;
} else {
    gcollect.disabled = false;
    gnum.disabled = false;
}

gcollection.onchange = function(){
    if (this.value == 'No' || this.value == '') {
        gcollect.disabled = true;
        gnum.disabled = true;
    } else {
        gcollect.disabled = false;
        gnum.disabled = false;
    }
}










var crop=document.getElementById("crop");
var tenurestatus=document.getElementById("tenurestatus");
var harvestyrs=document.getElementById("harvestyrs");
var agrilandnum=document.getElementById("agrilandnum");
var tempcrops=document.getElementById("tempcrops");
var tempcropskilo=document.getElementById("tempcropskilo");
var permacrops=document.getElementById("permacrops");
var permaccropskilo=document.getElementById("permaccropskilo");
var tcrops=document.getElementById("tcrops");
var tcropskilo=document.getElementById("tcropskilo");
var pcrops=document.getElementById("pcrops");
var pcropskilo=document.getElementById("pcropskilo");
var hcrops=document.getElementById("hcrops");
var hcropskilo=document.getElementById("hcropskilo");
var beastnum=document.getElementById("beastnum");
var beastown=document.getElementById("beastown");
var plowown=document.getElementById("plowown");
var harrownum=document.getElementById("harrownum");
var harrowown=document.getElementById("harrowown");
var mowernum=document.getElementById("mowernum");
var mowerown=document.getElementById("mowerown");
var cornnum=document.getElementById("cornnum");
var cornown=document.getElementById("cornown");
var spraynum=document.getElementById("spraynum");
var sprayown=document.getElementById("sprayown");
var tractornum=document.getElementById("tractornum");
var tractorown=document.getElementById("tractorown");
var turtlenum=document.getElementById("turtlenum");
var turtleown=document.getElementById("turtleown");
var planternum=document.getElementById("planternum");
var planterown=document.getElementById("planterown");
var dryernum=document.getElementById("dryernum");
var dryeown=document.getElementById("dryeown");
var mdrynum=document.getElementById("mdrynum");
var mdryown=document.getElementById("mdryown");
var millnum=document.getElementById("millnum");
var millown=document.getElementById("millown");
var harvesternum=document.getElementById("harvesternum");
var harvesterown=document.getElementById("harvesterown");
var granarynum=document.getElementById("granarynum");
var granaryown=document.getElementById("granaryown");
var shednum=document.getElementById("shednum");
var shedown=document.getElementById("shedown");
var pumpnum=document.getElementById("pumpnum");
var pumpown=document.getElementById("pumpown");
var agriequip=document.getElementById("agriequip");
var agriequipnum=document.getElementById("agriequipnum");
var cropcash=document.getElementById("cropcash");
var cropkind=document.getElementById("cropkind");




if (crop.value == 'No' || crop.value == '') {
  
    tenurestatus.disabled = true;
    harvestyrs.disabled = true;
    agrilandnum.disabled = true;
    tempcrops.disabled = true;
    tempcropskilo.disabled = true;
    permacrops.disabled = true;
    permaccropskilo.disabled = true;
    tcrops.disabled = true;
    tcropskilo.disabled = true;
    pcrops.disabled = true;
    pcropskilo.disabled = true;
    hcrops.disabled = true;
    hcropskilo.disabled = true;
    beastnum.disabled = true;
    beastown.disabled = true;
    plowown.disabled = true;
    harrownum.disabled = true;
    harrowown.disabled = true;
    mowernum.disabled = true;
    mowerown.disabled = true;
    cornnum.disabled = true;
    cornown.disabled = true;
    spraynum.disabled = true;
    sprayown.disabled = true;
    tractornum.disabled = true;
    tractorown.disabled = true;
    turtlenum.disabled = true;
    turtleown.disabled = true;
    planternum.disabled = true;
    planterown.disabled = true;
    dryernum.disabled = true;
    dryeown.disabled = true;
    mdrynum.disabled = true;
    mdryown.disabled = true;
    millnum.disabled = true;
    millown.disabled = true;
    harvesternum.disabled = true;
    harvesterown.disabled = true;
    granarynum.disabled = true;
    granaryown.disabled = true;
    shednum.disabled = true;
    shedown.disabled = true;
    pumpnum.disabled = true;
    pumpown.disabled = true;
    agriequip.disabled = true;
    agriequipnum.disabled = true;
    cropcash.disabled = true;
    cropkind.disabled = true;


}else{
   
    tenurestatus.disabled = false;
    harvestyrs.disabled = false;
    agrilandnum.disabled = false;
    tempcrops.disabled = false;
    tempcropskilo.disabled = false;
    permacrops.disabled = false;
    permaccropskilo.disabled = false;
    tcrops.disabled = false;
    tcropskilo.disabled = false;
    pcrops.disabled = false;
    pcropskilo.disabled = false;
    hcrops.disabled = false;
    hcropskilo.disabled = false;
    beastnum.disabled = false;
    beastown.disabled = false;
    plowown.disabled = false;
    harrownum.disabled = false;
    harrowown.disabled = false;
    mowernum.disabled = false;
    mowerown.disabled = false;
    cornnum.disabled = false;
    cornown.disabled = false;
    spraynum.disabled = false;
    sprayown.disabled = false;
    tractornum.disabled = false;
    tractorown.disabled = false;
    turtlenum.disabled = false;
    turtleown.disabled = false;
    planternum.disabled = false;
    planterown.disabled = false;
    dryernum.disabled = false;
    dryeown.disabled = false;
    mdrynum.disabled = false;
    mdryown.disabled = false;
    millnum.disabled = false;
    millown.disabled = false;
    harvesternum.disabled = false;
    harvesterown.disabled = false;
    granarynum.disabled = false;
    granaryown.disabled = false;
    shednum.disabled = false;
    shedown.disabled = false;
    pumpnum.disabled = false;
    pumpown.disabled = false;
    agriequip.disabled = false;
    agriequipnum.disabled = false;
    cropcash.disabled = false;
    cropkind.disabled = false;
  
}





crop.onchange = function () {
    if (this.value == 'No' || this.value == '') {
   
        tenurestatus.disabled = true;
        harvestyrs.disabled = true;
        agrilandnum.disabled = true;
        tempcrops.disabled = true;
        tempcropskilo.disabled = true;
        permacrops.disabled = true;
        permaccropskilo.disabled = true;
        tcrops.disabled = true;
        tcropskilo.disabled = true;
        pcrops.disabled = true;
        pcropskilo.disabled = true;
        hcrops.disabled = true;
        hcropskilo.disabled = true;
        beastnum.disabled = true;
        beastown.disabled = true;
        plowown.disabled = true;
        harrownum.disabled = true;
        harrowown.disabled = true;
        mowernum.disabled = true;
        mowerown.disabled = true;
        cornnum.disabled = true;
        cornown.disabled = true;
        spraynum.disabled = true;
        sprayown.disabled = true;
        tractornum.disabled = true;
        tractorown.disabled = true;
        turtlenum.disabled = true;
        turtleown.disabled = true;
        planternum.disabled = true;
        planterown.disabled = true;
        dryernum.disabled = true;
        dryeown.disabled = true;
        mdrynum.disabled = true;
        mdryown.disabled = true;
        millnum.disabled = true;
        millown.disabled = true;
        harvesternum.disabled = true;
        harvesterown.disabled = true;
        granarynum.disabled = true;
        granaryown.disabled = true;
        shednum.disabled = true;
        shedown.disabled = true;
        pumpnum.disabled = true;
        pumpown.disabled = true;
        agriequip.disabled = true;
        agriequipnum.disabled = true;
        cropcash.disabled = true;
        cropkind.disabled = true;


    }
    else {
     
        tenurestatus.disabled = false;
        harvestyrs.disabled = false;
        agrilandnum.disabled = false;
        tempcrops.disabled = false;
        tempcropskilo.disabled = false;
        permacrops.disabled = false;
        permaccropskilo.disabled = false;
        tcrops.disabled = false;
        tcropskilo.disabled = false;
        pcrops.disabled = false;
        pcropskilo.disabled = false;
        hcrops.disabled = false;
        hcropskilo.disabled = false;
        beastnum.disabled = false;
        beastown.disabled = false;
        plowown.disabled = false;
        harrownum.disabled = false;
        harrowown.disabled = false;
        mowernum.disabled = false;
        mowerown.disabled = false;
        cornnum.disabled = false;
        cornown.disabled = false;
        spraynum.disabled = false;
        sprayown.disabled = false;
        tractornum.disabled = false;
        tractorown.disabled = false;
        turtlenum.disabled = false;
        turtleown.disabled = false;
        planternum.disabled = false;
        planterown.disabled = false;
        dryernum.disabled = false;
        dryeown.disabled = false;
        mdrynum.disabled = false;
        mdryown.disabled = false;
        millnum.disabled = false;
        millown.disabled = false;
        harvesternum.disabled = false;
        harvesterown.disabled = false;
        granarynum.disabled = false;
        granaryown.disabled = false;
        shednum.disabled = false;
        shedown.disabled = false;
        pumpnum.disabled = false;
        pumpown.disabled = false;
        agriequip.disabled = false;
        agriequipnum.disabled = false;
        cropcash.disabled = false;
        cropkind.disabled = false;
    }

}


var livestock=document.getElementById("livestock");
var animals=document.getElementById("animals");
var animalssold=document.getElementById("animalssold");
var animalsconsume=document.getElementById("animalsconsume");
var meat=document.getElementById("meat");
var meatsold=document.getElementById("meatsold");
var meatconsume=document.getElementById("meatconsume");
var milk=document.getElementById("milk");
var milksold=document.getElementById("milksold");
var milkconsume=document.getElementById("milkconsume");
var eggs=document.getElementById("eggs");
var eggconsume=document.getElementById("eggconsume");
var otherlivestock=document.getElementById("otherlivestock");
var otherlivestocksold=document.getElementById("otherlivestocksold");
var otherlivestockconsume=document.getElementById("otherlivestockconsume");
var livestocknum=document.getElementById("livestocknum");
var livestockc=document.getElementById("livestockc");
var livestockr=document.getElementById("livestockr");
var livestocki=document.getElementById("livestocki");
var livestockip=document.getElementById("livestockip");
var livecash=document.getElementById("livecash");
var livekind=document.getElementById("livekind");
if (livestock.value == 'No' || livestock.value == '') {
     animals.disabled = true;
     animalssold.disabled = true;
     animalsconsume.disabled = true;
     meat.disabled = true;
     meatconsume.disabled = true;
     milk.disabled = true;
     milksold.disabled = true;
     milkconsume.disabled = true;
     eggs.disabled = true;
     eggconsume.disabled = true;
     otherlivestock.disabled = true;
     otherlivestocksold.disabled = true;
     otherlivestockconsume.disabled = true;
     livestocknum.disabled = true;
     livestockc.disabled = true;
     livestockr.disabled = true;
     livestocki.disabled = true;
     livestockip.disabled = true;
     livecash.disabled = true;
     livekind.disabled = true;


}else{
     animals.disabled = false;
     animalssold.disabled = false;
     animalsconsume.disabled = false;
     meat.disabled = false;
     meatconsume.disabled = false;
     milk.disabled = false;
     milksold.disabled = false;
     milkconsume.disabled = false;
     eggs.disabled = false;
     eggconsume.disabled = false;
     otherlivestock.disabled = false;
     otherlivestocksold.disabled = false;
     otherlivestockconsume.disabled = false;
     livestocknum.disabled = false;
     livestockc.disabled = false;
     livestockr.disabled = false;
     livestocki.disabled = false;
     livestockip.disabled = false;
     livecash.disabled = false;
     livekind.disabled = false;
}





livestock.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        animals.disabled = true;
        animalssold.disabled = true;
        animalsconsume.disabled = true;
        meat.disabled = true;
        meatconsume.disabled = true;
        milk.disabled = true;
        milksold.disabled = true;
        milkconsume.disabled = true;
        eggs.disabled = true;
        eggconsume.disabled = true;
        otherlivestock.disabled = true;
        otherlivestocksold.disabled = true;
        otherlivestockconsume.disabled = true;
        livestocknum.disabled = true;
        livestockc.disabled = true;
        livestockr.disabled = true;
        livestocki.disabled = true;
        livestockip.disabled = true;
        livecash.disabled = true;
        livekind.disabled = true;


    }
    else {
        animals.disabled = false;
        animalssold.disabled = false;
        animalsconsume.disabled = false;
        meat.disabled = false;
        meatconsume.disabled = false;
        milk.disabled = false;
        milksold.disabled = false;
        milkconsume.disabled = false;
        eggs.disabled = false;
        eggconsume.disabled = false;
        otherlivestock.disabled = false;
        otherlivestocksold.disabled = false;
        otherlivestockconsume.disabled = false;
        livestocknum.disabled = false;
        livestockc.disabled = false;
        livestockr.disabled = false;
        livestocki.disabled = false;
        livestockip.disabled = false;
        livecash.disabled = false;
        livekind.disabled = false;
    }

}


var livestockNumInput = document.getElementById('livestocknum');
var livestockCInput = document.getElementById('livestockc');
var livestockRInput = document.getElementById('livestockr');
var livestockIInput = document.getElementById('livestocki');
var livestockIpInput = document.getElementById('livestockip');

if (livestockNumInput.value == 'Not more than 3 years' || livestockNumInput.value == '') {
    livestockCInput.disabled = true;
    livestockRInput.disabled = true;
    livestockIInput.disabled = true;
    livestockIpInput.disabled = true;
} else {
    livestockCInput.disabled = false;
    livestockRInput.disabled = false;
    livestockIInput.disabled = false;
    livestockIpInput.disabled = false;
}

livestockNumInput.onchange = function() {
    if (this.value == 'Not more than 3 years' || this.value == '') {
        livestockCInput.disabled = true;
        livestockRInput.disabled = true;
        livestockIInput.disabled = true;
        livestockIpInput.disabled = true;
    } else {
        livestockCInput.disabled = false;
        livestockRInput.disabled = false;
        livestockIInput.disabled = false;
        livestockIpInput.disabled = false;
    }
}

livestockCInput.onchange = function () {
if (this.value == 'Remain the same' || this.value == 'Increase') {
livestockRInput.disabled = true;
livestockIInput.disabled = false;
livestockIpInput.disabled = false;
}
else {
livestockRInput.disabled = false;
livestockIInput.disabled = true;
livestockIpInput.disabled = true;
}
}

livestockIInput.onchange = function () {
if (this.value == 'No' || this.value == '') {
livestockIpInput.disabled = true;
}
else {
livestockIpInput.disabled = false;
}
}


    var fishingSelect = document.getElementById('fishing');
var catchingInput = document.getElementById('catching');
var culturingInput = document.getElementById('culturing');
var fishOneInput = document.getElementById('fishone');
var fishOneOwnInput = document.getElementById('fishoneown');
var fishTwoInput = document.getElementById('fishtwo');
var fishTwoOwnInput = document.getElementById('fishtwoown');
var fishThreeInput = document.getElementById('fishthree');
var fishThreeOwnInput = document.getElementById('fishthreeown');
var fishFourInput = document.getElementById('fishfour');
var fishFourOwnInput = document.getElementById('fishfourown');
var fishFiveInput = document.getElementById('fishfive');
var fishFiveOwnInput = document.getElementById('fishfiveown');
var fishYrsInput = document.getElementById('fishyrs');
var fishYsrcInput = document.getElementById('fishyrsc');
var fishRInput = document.getElementById('fishr');
var fishIInput = document.getElementById('fishi');
var fishIpInput = document.getElementById('fiship');
var fishCashInput = document.getElementById('fishcash');
var fishKindInput = document.getElementById('fishkind');

if (fishingSelect.value == 'No' || fishingSelect.value == '') {
    catchingInput.disabled = true;
    culturingInput.disabled = true;
    fishOneInput.disabled = true;
    fishOneOwnInput.disabled = true;
    fishTwoInput.disabled = true;
    fishTwoOwnInput.disabled = true;
    fishThreeInput.disabled = true;
    fishThreeOwnInput.disabled = true;
    fishFourInput.disabled = true;
    fishFourOwnInput.disabled = true;
    fishFiveInput.disabled = true;
    fishFiveOwnInput.disabled = true;
    fishYrsInput.disabled = true;
    fishYsrcInput.disabled = true;
    fishRInput.disabled = true;
    fishIInput.disabled = true;
    fishIpInput.disabled = true;
    fishCashInput.disabled = true;
    fishKindInput.disabled = true;
} else {
    catchingInput.disabled = false;
    culturingInput.disabled = false;
    fishOneInput.disabled = false;
    fishOneOwnInput.disabled = false;
    fishTwoInput.disabled = false;
    fishTwoOwnInput.disabled = false;
    fishThreeInput.disabled = false;
    fishThreeOwnInput.disabled = false;
    fishFourInput.disabled = false;
    fishFourOwnInput.disabled = false;
    fishFiveInput.disabled = false;
    fishFiveOwnInput.disabled = false;
    fishYrsInput.disabled = false;
    fishYsrcInput.disabled = false;
    fishRInput.disabled = false;
    fishIInput.disabled = false;
    fishIpInput.disabled = false;
    fishCashInput.disabled = false;
    fishKindInput.disabled = false;
}

fishingSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        catchingInput.disabled = true;
        culturingInput.disabled = true;
        fishOneInput.disabled = true;
        fishOneOwnInput.disabled = true;
        fishTwoInput.disabled = true;
        fishTwoOwnInput.disabled = true;
        fishThreeInput.disabled = true;
        fishThreeOwnInput.disabled = true;
        fishFourInput.disabled = true;
        fishFourOwnInput.disabled = true;
        fishFiveInput.disabled = true;
        fishFiveOwnInput.disabled = true;
        fishYrsInput.disabled = true;
        fishYsrcInput.disabled = true;
        fishRInput.disabled = true;
        fishIInput.disabled = true;
        fishIpInput.disabled = true;
      fishCashInput.disabled = true;
    fishKindInput.disabled = true;
} else {
    catchingInput.disabled = false;
    culturingInput.disabled = false;
    fishOneInput.disabled = false;
    fishOneOwnInput.disabled = false;
    fishTwoInput.disabled = false;
    fishTwoOwnInput.disabled = false;
    fishThreeInput.disabled = false;
    fishThreeOwnInput.disabled = false;
    fishFourInput.disabled = false;
    fishFourOwnInput.disabled = false;
    fishFiveInput.disabled = false;
    fishFiveOwnInput.disabled = false;
    fishYrsInput.disabled = false;
    fishYsrcInput.disabled = false;
    fishRInput.disabled = false;
    fishIInput.disabled = false;
    fishIpInput.disabled = false;
    fishCashInput.disabled = false;
    fishKindInput.disabled = false;
}
}








    var fishyrsSelect = document.getElementById('fishyrs');
var fishyrscInput = document.getElementById('fishyrsc');
var fishrInput = document.getElementById('fishr');
var fishiInput = document.getElementById('fishi');
var fishipInput = document.getElementById('fiship');

if (fishyrsSelect.value == 'Not more than 3 years' || fishyrsSelect.value == '') {
    fishyrscInput.disabled = true;
    fishrInput.disabled = true;
    fishiInput.disabled = true;
    fishipInput.disabled = true;
} else {
    fishyrscInput.disabled = false;
    fishrInput.disabled = false;
    fishiInput.disabled = false;
    fishipInput.disabled = false;
}

fishyrsSelect.onchange = function() {
    if (this.value == 'Not more than 3 years' || this.value == '') {
        fishyrscInput.disabled = true;
        fishrInput.disabled = true;
        fishiInput.disabled = true;
        fishipInput.disabled = true;
    } else {
        fishyrscInput.disabled = false;
        fishrInput.disabled = false;
        fishiInput.disabled = false;
        fishipInput.disabled = false;
    }
}


    var forestrySelect = document.getElementById('forestry');
var forestcashInput = document.getElementById('forestcash');
var forestkindInput = document.getElementById('forestkind');

if (forestrySelect.value == 'No' || forestrySelect.value == '') {
    forestcashInput.disabled = true;
    forestkindInput.disabled = true;
} else {
    forestcashInput.disabled = false;
    forestkindInput.disabled = false;
}

forestrySelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        forestcashInput.disabled = true;
        forestkindInput.disabled = true;
    } else {
        forestcashInput.disabled = false;
        forestkindInput.disabled = false;
    }
}

var wholesaleSelect = document.getElementById('wholesale');
var wholesalecashInput = document.getElementById('wholesalecash');
var wholesalekindInput = document.getElementById('wholesalekind');

if (wholesaleSelect.value == 'No' || wholesaleSelect.value == '') {
    wholesalecashInput.disabled = true;
    wholesalekindInput.disabled = true;
} else {
    wholesalecashInput.disabled = false;
    wholesalekindInput.disabled = false;
}

wholesaleSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        wholesalecashInput.disabled = true;
        wholesalekindInput.disabled = true;
    } else {
        wholesalecashInput.disabled = false;
        wholesalekindInput.disabled = false;
    }
}

var manufacturingSelect = document.getElementById('manufacturing');
var manucashInput = document.getElementById('manucash');
var manukindInput = document.getElementById('manukind');

if (manufacturingSelect.value == 'No' || manufacturingSelect.value == '') {
    manucashInput.disabled = true;
    manukindInput.disabled = true;
} else {
    manucashInput.disabled = false;
    manukindInput.disabled = false;
}

manufacturingSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        manucashInput.disabled = true;
        manukindInput.disabled = true;
    } else {
        manucashInput.disabled = false;
        manukindInput.disabled = false;
    }
}


var communitySelect = document.getElementById('community');
var servCashInput = document.getElementById('servcash');
var servKindInput = document.getElementById('servkind');
var storageSelect = document.getElementById('storage');
var transpoCashInput = document.getElementById('transpocash');
var transpoKindInput = document.getElementById('transpokind');
var miningSelect = document.getElementById('mining');
var miningCashInput = document.getElementById('miningcash');
var miningKindInput = document.getElementById('miningkind');
var constructSelect = document.getElementById('construct');
var constCashInput = document.getElementById('constcash');
var constKindInput = document.getElementById('constkind');
var elsewhereSelect = document.getElementById('elsewhere');
var actCashInput = document.getElementById('actcash');
var actKindInput = document.getElementById('actkind');

if (communitySelect.value == 'No' || communitySelect.value == '') {
    servCashInput.disabled = true;
    servKindInput.disabled = true;
} else {
    servCashInput.disabled = false;
    servKindInput.disabled = false;
}

if (storageSelect.value == 'No' || storageSelect.value == '') {
    transpoCashInput.disabled = true;
    transpoKindInput.disabled = true;
} else {
    transpoCashInput.disabled = false;
    transpoKindInput.disabled = false;
}

if (miningSelect.value == 'No' || miningSelect.value == '') {
    miningCashInput.disabled = true;
    miningKindInput.disabled = true;
} else {
    miningCashInput.disabled = false;
    miningKindInput.disabled = false;
}

if (constructSelect.value == 'No' || constructSelect.value == '') {
    constCashInput.disabled = true;
    constKindInput.disabled = true;
} else {
    constCashInput.disabled = false;
    constKindInput.disabled = false;
}

if (elsewhereSelect.value == 'No' || elsewhereSelect.value == '') {
    actCashInput.disabled = true;
    actKindInput.disabled = true;
} else {
    actCashInput.disabled = false;
    actKindInput.disabled = false;
}

communitySelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        servCashInput.disabled = true;
        servKindInput.disabled = true;
    } else {
        servCashInput.disabled = false;
        servKindInput.disabled = false;
    }
}

storageSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        transpoCashInput.disabled = true;
        transpoKindInput.disabled = true;
    } else {
        transpoCashInput.disabled = false;
        transpoKindInput.disabled = false;
    }
}

miningSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        miningCashInput.disabled = true;
        miningKindInput.disabled = true;
    } else {
        miningCashInput.disabled = false;
        miningKindInput.disabled = false;
    }
}

constructSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        constCashInput.disabled = true;
        constKindInput.disabled = true;
    } else {
        constCashInput.disabled = false;
        constKindInput.disabled = false;
    }
}

elsewhereSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        actCashInput.disabled = true;
        actKindInput.disabled = true;
    } else {
        actCashInput.disabled = false;
        actKindInput.disabled = false;
    }
}









    var catchingSelect = document.getElementById('catching');
var fishLocInput = document.getElementById('fishloc');
var boatOneInput = document.getElementById('boatone');
var boatOneOwnInput = document.getElementById('boatoneown');
var boatTwoInput = document.getElementById('boattwo');
var boatTwoOwnInput = document.getElementById('boattwoown');
var boatThreeInput = document.getElementById('boatthree');
var boatThreeOwnInput = document.getElementById('boathreeown');
var boatFourInput = document.getElementById('boatfour');
var boatFourOwnInput = document.getElementById('boatfourown');
var boatFiveInput = document.getElementById('boatfive');
var boatFiveOwnInput = document.getElementById('boatfiveown');
var gearOneInput = document.getElementById('gearone');
var gearOneOwnInput = document.getElementById('gearoneown');
var gearTwoInput = document.getElementById('geartwo');
var gearTwoOwnInput = document.getElementById('geartwoown');
var gearThreeInput = document.getElementById('gearthree');
var gearThreeOwnInput = document.getElementById('gearthreeown');
var gearFourInput = document.getElementById('gearfour');
var gearFourOwnInput = document.getElementById('gearfourown');

if (catchingSelect.value == 'No' || catchingSelect.value == '') {
  fishLocInput.disabled = true;
  boatOneInput.disabled = true;
  boatOneOwnInput.disabled = true;
  boatTwoInput.disabled = true;
  boatTwoOwnInput.disabled = true;
  boatThreeInput.disabled = true;
  boatThreeOwnInput.disabled = true;
  boatFourInput.disabled = true;
  boatFourOwnInput.disabled = true;
  boatFiveInput.disabled = true;
  boatFiveOwnInput.disabled = true;
  gearOneInput.disabled = true;
  gearOneOwnInput.disabled = true;
  gearTwoInput.disabled = true;
  gearTwoOwnInput.disabled = true;
  gearThreeInput.disabled = true;
  gearThreeOwnInput.disabled = true;
  gearFourInput.disabled = true;
  gearFourOwnInput.disabled = true;
} else {
  fishLocInput.disabled = false;
  boatOneInput.disabled = false;
  boatOneOwnInput.disabled = false;
  boatTwoInput.disabled = false;
  boatTwoOwnInput.disabled = false;
  boatThreeInput.disabled = false;
  boatThreeOwnInput.disabled = false;
  boatFourInput.disabled = false;
  boatFourOwnInput.disabled = false;
  boatFiveInput.disabled = false;
  boatFiveOwnInput.disabled = false;
  gearOneInput.disabled = false;
  gearOneOwnInput.disabled = false;
  gearTwoInput.disabled = false;
  gearTwoOwnInput.disabled = false;
  gearThreeInput.disabled = false;
  gearThreeOwnInput.disabled = false;
  gearFourInput.disabled = false;
  gearFourOwnInput.disabled = false;
}

catchingSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    fishLocInput.disabled = true;
    boatOneInput.disabled = true;
    boatOneOwnInput.disabled = true;
    boatTwoInput.disabled = true;
    boatTwoOwnInput.disabled = true;
    boatThreeInput.disabled = true;
    boatThreeOwnInput.disabled = true;
    boatFourInput.disabled = true;
    boatFourOwnInput.disabled = true;
    boatFiveInput.disabled = true;
    boatFiveOwnInput.disabled = true;
    gearOneInput.disabled = true;
    gearOneOwnInput.disabled = true;
    gearTwoInput.disabled = true;
    gearTwoOwnInput.disabled = true;
    gearThreeInput.disabled = true;
    gearThreeOwnInput.disabled = true;
  gearFourInput.disabled = true;
  gearFourOwnInput.disabled = true;
} else {
  fishLocInput.disabled = false;
  boatOneInput.disabled = false;
  boatOneOwnInput.disabled = false;
  boatTwoInput.disabled = false;
  boatTwoOwnInput.disabled = false;
  boatThreeInput.disabled = false;
  boatThreeOwnInput.disabled = false;
  boatFourInput.disabled = false;
  boatFourOwnInput.disabled = false;
  boatFiveInput.disabled = false;
  boatFiveOwnInput.disabled = false;
  gearOneInput.disabled = false;
  gearOneOwnInput.disabled = false;
  gearTwoInput.disabled = false;
  gearTwoOwnInput.disabled = false;
  gearThreeInput.disabled = false;
  gearThreeOwnInput.disabled = false;
  gearFourInput.disabled = false;
  gearFourOwnInput.disabled = false;
}
}


var culturingSelect = document.getElementById('culturing');
var pondInput = document.getElementById('pond');
var fishpInput = document.getElementById('fishp');
var fishcInput = document.getElementById('fishc');
var seaweedInput = document.getElementById('seaweed');
var oysterInput = document.getElementById('oyster');
var musselInput = document.getElementById('mussel');
var fishtInput = document.getElementById('fisht');
var hatcheryInput = document.getElementById('hatchery');
var aquaotInput = document.getElementById('aquaot');

if (culturingSelect.value == 'No' || culturingSelect.value == '') {
    pondInput.disabled = true;
    fishpInput.disabled = true;
    fishcInput.disabled = true;
    seaweedInput.disabled = true;
    oysterInput.disabled = true;
    musselInput.disabled = true;
    fishtInput.disabled = true;
    hatcheryInput.disabled = true;
    aquaotInput.disabled = true;
} else {
    pondInput.disabled = false;
    fishpInput.disabled = false;
    fishcInput.disabled = false;
    seaweedInput.disabled = false;
    oysterInput.disabled = false;
    musselInput.disabled = false;
    fishtInput.disabled = false;
    hatcheryInput.disabled = false;
    aquaotInput.disabled = false;
}

culturingSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        pondInput.disabled = true;
        fishpInput.disabled = true;
        fishcInput.disabled = true;
        seaweedInput.disabled = true;
        oysterInput.disabled = true;
        musselInput.disabled = true;
        fishtInput.disabled = true;
        hatcheryInput.disabled = true;
        aquaotInput.disabled = true;
    } else {
        pondInput.disabled = false;
        fishpInput.disabled = false;
        fishcInput.disabled = false;
        seaweedInput.disabled = false;
        oysterInput.disabled = false;
        musselInput.disabled = false;
        fishtInput.disabled = false;
        hatcheryInput.disabled = false;
        aquaotInput.disabled = false;
    }
}


    var livingNumSelect = document.getElementById('livingnum');
var harvestYrsInput = document.getElementById('harvestyrs');
var harvestRInput = document.getElementById('harvestr');
var harvestPrInput = document.getElementById('harvestpr');
var sameCropInput = document.getElementById('samecrop');
var sameCropRInput = document.getElementById('samecropr');
var difCropInput = document.getElementById('difcrop');
var difCropRInput = document.getElementById('difcropr');
var cropIInput = document.getElementById('cropi');
var cropIProvInput = document.getElementById('cropiprov');
var agrifInput = document.getElementById('agrif');
var agrifProvInput = document.getElementById('agrifprov');

if (livingNumSelect.value == 'Not more than 3 years' || livingNumSelect.value == '') {
    harvestYrsInput.disabled = true;
    harvestRInput.disabled = true;
    harvestPrInput.disabled = true;
    sameCropInput.disabled = true;
    sameCropRInput.disabled = true;
    difCropInput.disabled = true;
    difCropRInput.disabled = true;
    cropIInput.disabled = true;
    cropIProvInput.disabled = true;
    agrifInput.disabled = true;
    agrifProvInput.disabled = true;
} else {
    harvestYrsInput.disabled = false;
    harvestRInput.disabled = false;
    harvestPrInput.disabled = false;
    sameCropInput.disabled = false;
    sameCropRInput.disabled = false;
    difCropInput.disabled = false;
    difCropRInput.disabled = false;
    cropIInput.disabled = false;
    cropIProvInput.disabled = false;
    agrifInput.disabled = false;
    agrifProvInput.disabled = false;
}

livingNumSelect.onchange = function() {
    if (this.value == 'Not more than 3 years' || this.value == '') {
        harvestYrsInput.disabled = true;
        harvestRInput.disabled = true;
        harvestPrInput.disabled = true;
        sameCropInput.disabled = true;
        sameCropRInput.disabled = true;
        difCropInput.disabled = true;
        difCropRInput.disabled = true;
        cropIInput.disabled = true;
        cropIProvInput.disabled = true;
        agrifInput.disabled = true;
        agrifProvInput.disabled = true;
    } else {
        harvestYrsInput.disabled = false;
        harvestRInput.disabled = false;
        harvestPrInput.disabled = false;
        sameCropInput.disabled = false;
        sameCropRInput.disabled = false;
        difCropInput.disabled = false;
        difCropRInput.disabled = false;
        cropIInput.disabled = false;
        cropIProvInput.disabled = false;
        agrifInput.disabled = false;
        agrifProvInput.disabled = false;
    }
};




















    var sameCropSelect = document.getElementById('samecrop');
var sameCropRInput = document.getElementById('samecropr');
var difCropSelect = document.getElementById('difcrop');
var difCropRInput = document.getElementById('difcropr');
var cropISelect = document.getElementById('cropi');
var cropIProvInput = document.getElementById('cropiprov');
var agriFSelect = document.getElementById('agrif');
var agriFProvInput = document.getElementById('agrifprov');

if (sameCropSelect.value == 'No' || sameCropSelect.value == '') {
    sameCropRInput.disabled = true;
} else {
    sameCropRInput.disabled = false;
}

if (difCropSelect.value == 'No' || difCropSelect.value == '') {
    difCropRInput.disabled = true;
} else {
    difCropRInput.disabled = false;
}

if (cropISelect.value == 'No' || cropISelect.value == '') {
    cropIProvInput.disabled = true;
} else {
    cropIProvInput.disabled = false;
}

if (agriFSelect.value == 'No' || agriFSelect.value == '') {
    agriFProvInput.disabled = true;
} else {
    agriFProvInput.disabled = false;
}

sameCropSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        sameCropRInput.disabled = true;
    } else {
        sameCropRInput.disabled = false;
    }
}

difCropSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        difCropRInput.disabled = true;
    } else {
        difCropRInput.disabled = false;
    }
}

cropISelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        cropIProvInput.disabled = true;
    } else {
        cropIProvInput.disabled = false;
    }
}

agriFSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        agriFProvInput.disabled = true;
    } else {
        agriFProvInput.disabled = false;
    }
}



    var waterSelect = document.getElementById('water');
var waterrInput = document.getElementById('waterr');

if (waterSelect.value == 'Decrease' || waterSelect.value == '') {
    waterrInput.disabled = false;
} else {
    waterrInput.disabled = true;
}

waterSelect.onchange = function() {
    if (this.value == 'Decrease' || this.value == '') {
        waterrInput.disabled = false;
    } else {
        waterrInput.disabled = true;
    }
}

var floodtSelect = document.getElementById('floodt');
var floodhrsInput = document.getElementById('floodhrs');
var floodmnthsInput = document.getElementById('floodmnths');

if (floodtSelect.value == 'Yes' || floodtSelect.value == '') {
    floodhrsInput.disabled = false;
    floodmnthsInput.disabled = false;
} else {
    floodhrsInput.disabled = true;
    floodmnthsInput.disabled = true;
}

floodtSelect.onchange = function() {
    if (this.value == 'Yes' || this.value == '') {
        floodhrsInput.disabled = false;
        floodmnthsInput.disabled = false;
    } else {
        floodhrsInput.disabled = true;
        floodmnthsInput.disabled = true;
    }
}

var droughtSelect = document.getElementById('drought');
var droughtnumInput = document.getElementById('droughtnum');

if (droughtSelect.value == 'Yes' || droughtSelect.value == '') {
    droughtnumInput.disabled = false;
} else {
    droughtnumInput.disabled = true;
}

droughtSelect.onchange = function() {
    if (this.value == 'Yes' || this.value == '') {
        droughtnumInput.disabled = false;
    } else {
        droughtnumInput.disabled = true;
    }
}

var moveoutSelect = document.getElementById('moveout');
var moveoutrInput = document.getElementById('moveoutr');
var evacuateSelect = document.getElementById('evacuate');
var evacuatelocInput = document.getElementById('evacuateloc');
var evacuatenumInput = document.getElementById('evacuatenum');

if (moveoutSelect.value == 'Yes' || moveoutSelect.value == '') {
    moveoutrInput.disabled = false;
    evacuateSelect.disabled = false;
} else {
    moveoutrInput.disabled = true;
    evacuateSelect.disabled = true;
    evacuatelocInput.disabled = true;
    evacuatenumInput.disabled = true;
}

moveoutSelect.onchange = function() {
    if (this.value == 'Yes' || this.value == '') {
        moveoutrInput.disabled = false;
        evacuateSelect.disabled = false;
    } else {
        moveoutrInput.disabled = true;
        evacuateSelect.disabled = true;
        evacuatelocInput.disabled = true;
        evacuatenumInput.disabled = true;
    }
}

evacuateSelect.onchange = function() {
    if (this.value == 'Yes' || this.value == '') {
        evacuatelocInput.disabled = false;
        evacuatenumInput.disabled = false;
    } else {
        evacuatelocInput.disabled = true;
        evacuatenumInput.disabled = true;
    }
}

var typhoonSelect = document.getElementById("typhoon");
var typhoonNumInput = document.getElementById("typhoonnum");
var typhoonAInput = document.getElementById("typhoona");
var typhoonSrcInput = document.getElementById("typhoonsrc");
if (typhoonSelect.value == "No" || typhoonSelect.value == "") {
  typhoonNumInput.disabled = true;
  typhoonAInput.disabled = true;
   typhoonSrcInput.disabled=true;
} else {
  typhoonNumInput.disabled = false;
  typhoonAInput.disabled = false;

}

typhoonSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    typhoonNumInput.disabled = true;
    typhoonAInput.disabled = true;
    typhoonSrcInput.disabled=true;
  } else {
    typhoonNumInput.disabled = false;
    typhoonAInput.disabled = false;
  }
}
typhoonAInput.onchange = function () {
  if (this.value == "No" || this.value == "") {
    typhoonSrcInput.disabled = true;
  } else {
    typhoonSrcInput.disabled = false;
  }
}

var floodSelect = document.getElementById("flood");
var floodNumInput = document.getElementById("floodnum");
var floodAInput = document.getElementById("flooda");
var floodSrcInput = document.getElementById("floodsrc");
if (floodSelect.value == "No" || floodSelect.value == "") {
  floodNumInput.disabled = true;
  floodAInput.disabled = true;
  floodSrcInput.disabled=true;
} else {
  floodNumInput.disabled = false;
  floodAInput.disabled = false;

}
floodSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    floodNumInput.disabled = true;
    floodAInput.disabled = true;
    floodSrcInput.disabled=true;
  } else {
    floodNumInput.disabled = false;
    floodAInput.disabled = false;
  }
};

floodAInput.onchange = function () {
  if (this.value == "No" || this.value == "") {
    floodSrcInput.disabled = true;
  } else {
    floodSrcInput.disabled = false;
  }
}


var droughtSelect = document.getElementById("drough");
var droughtNumInput = document.getElementById("droughnum");
var droughtAInput = document.getElementById("droughta");
var droughtSrcInput = document.getElementById("droughtsrc");

if (droughtSelect.value == "No" || droughtSelect.value == "") {
  droughtNumInput.disabled = true;
  droughtAInput.disabled = true;
 droughtSrcInput.disabled=true;
} else {
  droughtNumInput.disabled = false;
  droughtAInput.disabled = false;

}


droughtSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    droughtNumInput.disabled = true;
    droughtAInput.disabled = true;
    droughtSrcInput.disabled=true;
  } else {
    droughtNumInput.disabled = false;
    droughtAInput.disabled = false;
  }
}

droughtAInput.onchange = function () {
  if (this.value == "No" || this.value == "") {
    droughtSrcInput.disabled = true;
  } else {
    droughtSrcInput.disabled = false;
  }
}




var quakeSelect = document.getElementById('quake');
var quakeNumInput = document.getElementById('quakenum');
var quakeAInput = document.getElementById('quakea');
var quakeSrcInput = document.getElementById('quakesrc');
if (quakeSelect.value == 'No' || quakeSelect.value == '') {
  quakeNumInput.disabled = true;
  quakeAInput.disabled = true;
  quakeSrcInput.disabled = true;
} else {
  quakeNumInput.disabled = false;
  quakeAInput.disabled = false;
}
quakeSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    quakeNumInput.disabled = true;
    quakeAInput.disabled = true;
    quakeSrcInput.disabled = true;
  } else {
    quakeNumInput.disabled = false;
    quakeAInput.disabled = false;
  }
}

quakeAInput.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    quakeSrcInput.disabled = true;
  } else {
    quakeSrcInput.disabled = false;
  }
}

var eruptSelect = document.getElementById('erupt');
var eruptNumInput = document.getElementById('eruptnum');
var eruptAInput = document.getElementById('erupta');
var eruptSrcInput = document.getElementById('eruptsrc');
if (eruptSelect.value == 'No' || eruptSelect.value == '') {
  eruptNumInput.disabled = true;
  eruptAInput.disabled = true;
  eruptSrcInput.disabled = true;
} else {
  eruptNumInput.disabled = false;
  eruptAInput.disabled = false;
}
eruptSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    eruptNumInput.disabled = true;
    eruptAInput.disabled = true;
    eruptSrcInput.disabled = true;
  } else {
    eruptNumInput.disabled = false;
    eruptAInput.disabled = false;
  }
}

eruptAInput.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    eruptSrcInput.disabled = true;
  } else {
    eruptSrcInput.disabled = false;
  }
}



var landslideSelect = document.getElementById('landslide');
var landslideNumInput = document.getElementById('landslidenum');
var landslideAreaInput = document.getElementById('landslinea');
var landslideSrcInput = document.getElementById('landslinesrc');

if (landslideSelect.value == 'No' || landslideSelect.value == '') {
    landslideNumInput.disabled = true;
    landslideAreaInput.disabled = true;
    landslideSrcInput.disabled = true;
} else {
    landslideNumInput.disabled = false;
    landslideAreaInput.disabled = false;
    landslideSrcInput.disabled = false;
}

landslideSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        landslideNumInput.disabled = true;
        landslideAreaInput.disabled = true;
        landslideSrcInput.disabled = true;
    } else {
        landslideNumInput.disabled = false;
        landslideAreaInput.disabled = false;
    
    }
}

landslideAreaInput.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        landslideSrcInput.disabled = true;
    } else {
        landslideSrcInput.disabled = false;
    }
}



var tsunamiSelect = document.getElementById('tsunami');
var tsunamiNumInput = document.getElementById('tsunaminum');
var tsunamiAreaInput = document.getElementById('tsunamia');
var tsunamiSrcInput = document.getElementById('tsunamisrc');

if (tsunamiSelect.value == 'No' || tsunamiSelect.value == '') {
    tsunamiNumInput.disabled = true;
    tsunamiAreaInput.disabled = true;
    tsunamiSrcInput.disabled = true;
} else {
    tsunamiNumInput.disabled = false;
    tsunamiAreaInput.disabled = false;
    tsunamiSrcInput.disabled = false;
}

tsunamiSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        tsunamiNumInput.disabled = true;
        tsunamiAreaInput.disabled = true;
        tsunamiSrcInput.disabled = true;
    } else {
        tsunamiNumInput.disabled = false;
        tsunamiAreaInput.disabled = false;
        tsunamiSrcInput.disabled = false;
    }
}



tsunamiAreaInput.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        tsunamiSrcInput.disabled = true;
    } else {
        tsunamiSrcInput.disabled = false;
    }
}





var fireSelect = document.getElementById('fire');
var fireNumInput = document.getElementById('firenum');
var fireAInput = document.getElementById('firea');
var fireSrcInput = document.getElementById('firesrc');
if (fireSelect.value == 'No' || fireSelect.value == '') {
    fireNumInput.disabled = true;
    fireAInput.disabled = true;
    fireSrcInput.disabled = true;
} else {
    fireNumInput.disabled = false;
    fireAInput.disabled = false;
}
fireSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        fireNumInput.disabled = true;
        fireAInput.disabled = true;
        fireSrcInput.disabled = true;
    } else {
        fireNumInput.disabled = false;
        fireAInput.disabled = false;
    }
}
fireAInput.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        fireSrcInput.disabled = true;
    } else {
        fireSrcInput.disabled = false;
    }
}

var forestSelect = document.getElementById('forest');
var forestNumInput = document.getElementById('forestnum');
var forestAInput = document.getElementById('foresta');
var forestSrcInput = document.getElementById('forestsrc');
if (forestSelect.value == 'No' || forestSelect.value == '') {
    forestNumInput.disabled = true;
    forestAInput.disabled = true;
    forestSrcInput.disabled = true;
} else {
    forestNumInput.disabled = false;
    forestAInput.disabled = false;
}
forestSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        forestNumInput.disabled = true;
        forestAInput.disabled = true;
        forestSrcInput.disabled = true;
    } else {
        forestNumInput.disabled = false;
        forestAInput.disabled = false;
    }
}
forestAInput.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        forestSrcInput.disabled = true;
    } else {
        forestSrcInput.disabled = false;
    }
}



var conflictSelect = document.getElementById('conflict');
var conflictNumInput = document.getElementById('conflictnum');
var conflictAInput = document.getElementById('conflicta');
var conflictSrcInput = document.getElementById('conflictsrc');
var osaSelect = document.getElementById('osa');
var osaSrcInput = document.getElementById('osasrc');

if (conflictSelect.value == 'No' || conflictSelect.value == '') {
  conflictNumInput.disabled = true;
  conflictAInput.disabled = true;
} else {
  conflictNumInput.disabled = false;
  conflictAInput.disabled = false;
}

if (conflictAInput.value == 'No' || conflictAInput.value == '') {
  conflictSrcInput.disabled = true;
} else {
  conflictSrcInput.disabled = false;
}

if (osaSelect.value == 'No' || osaSelect.value == '') {
  osaSrcInput.disabled = true;
} else {
  osaSrcInput.disabled = false;
}

conflictSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    conflictNumInput.disabled = true;
    conflictAInput.disabled = true;
  } else {
    conflictNumInput.disabled = false;
    conflictAInput.disabled = false;
  }
}

conflictAInput.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    conflictSrcInput.disabled = true;
  } else {
    conflictSrcInput.disabled = false;
  }
}

osaSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    osaSrcInput.disabled = true;
  } else {
    osaSrcInput.disabled = false;
  }
}



var disasterPreparednessKitSelect = document.getElementById('disasterprepaidnesskit');
var wateryInput = document.getElementById('watery');
var foodInput = document.getElementById('food');
var matchInput = document.getElementById('match');
var lightInput = document.getElementById('light');
var radioInput = document.getElementById('radio');
var cassetteInput = document.getElementById('casette');
var candleInput = document.getElementById('candle');
var kitInput = document.getElementById('kit');
var whistleInput = document.getElementById('whistle');
var clotheInput = document.getElementById('clothe');
var blanketInput = document.getElementById('blanket');
var battInput = document.getElementById('batt');
var docuInput = document.getElementById('docu');
var othrInput = document.getElementById('othr');

if (disasterPreparednessKitSelect.value == 'No' || disasterPreparednessKitSelect.value == '') {
    wateryInput.disabled = true;
    foodInput.disabled = true;
    matchInput.disabled = true;
    lightInput.disabled = true;
    radioInput.disabled = true;
    cassetteInput.disabled = true;
    candleInput.disabled = true;
    kitInput.disabled = true;
    whistleInput.disabled = true;
    clotheInput.disabled = true;
    blanketInput.disabled = true;
    battInput.disabled = true;
    docuInput.disabled = true;
    othrInput.disabled = true;
} else {
    wateryInput.disabled = false;
    foodInput.disabled = false;
    matchInput.disabled = false;
    lightInput.disabled = false;
    radioInput.disabled = false;
    cassetteInput.disabled = false;
    candleInput.disabled = false;
    kitInput.disabled = false;
    whistleInput.disabled = false;
    clotheInput.disabled = false;
    blanketInput.disabled = false;
    battInput.disabled = false;
    docuInput.disabled = false;
    othrInput.disabled = false;
}

disasterPreparednessKitSelect.onchange = function () {
    if (this.value == 'No' || this.value == '') {
        wateryInput.disabled = true;
        foodInput.disabled = true;
        matchInput.disabled = true;
        lightInput.disabled = true;
        radioInput.disabled = true;
        cassetteInput.disabled = true;
        candleInput.disabled = true;
        kitInput.disabled = true;
        whistleInput.disabled = true;
        clotheInput.disabled = true;
        blanketInput.disabled = true;
        battInput.disabled = true;
        docuInput.disabled = true;
        othrInput.disabled = true;
    } else {
        wateryInput.disabled = false;
        foodInput.disabled = false;
        matchInput.disabled = false;
        lightInput.disabled = false;
        radioInput.disabled = false;
        cassetteInput.disabled = false;
        candleInput.disabled = false;
        kitInput.disabled = false;
        whistleInput.disabled = false;
        clotheInput.disabled = false;
        blanketInput.disabled = false;
        battInput.disabled = false;
        docuInput.disabled = false;
        othrInput.disabled = false;
    }
}

// define variables for each element
var osaSelect = document.getElementById('osa');
var osaSrcInput = document.getElementById('osasrc');
var waterySelect = document.getElementById('watery');
var wateryNumInput = document.getElementById('waterynum');
var foodSelect = document.getElementById('food');
var foodNumInput = document.getElementById('foodnum');

// define onchange event handlers for each element
osaSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    osaSrcInput.disabled = true;
  } else {
    osaSrcInput.disabled = false;
  }
}

waterySelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    wateryNumInput.disabled = true;
  } else {
    wateryNumInput.disabled = false;
  }
}

foodSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    foodNumInput.disabled = true;
  } else {
    foodNumInput.disabled = false;
  }
}


var matchSelect = document.getElementById('match');
var matchNumInput = document.getElementById('matchnum');
matchSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    matchNumInput.disabled = true;
  } else {
    matchNumInput.disabled = false;
  }
}

var lightSelect = document.getElementById('light');
var lightNumInput = document.getElementById('lightnum');
lightSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    lightNumInput.disabled = true;
  } else {
    lightNumInput.disabled = false;
  }
}

var radioSelect = document.getElementById('radio');
var radioNumInput = document.getElementById('radionum');
radioSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    radioNumInput.disabled = true;
  } else {
    radioNumInput.disabled = false;
  }
}

var candleSelect = document.getElementById('candle');
var candleNumInput = document.getElementById('candlenum');
candleSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    candleNumInput.disabled = true;
  } else {
    candleNumInput.disabled = false;
  }
}


var kitSelect = document.getElementById("kit");
var whistleSelect = document.getElementById("whistle");
var clotheSelect = document.getElementById("clothe");
var blanketSelect = document.getElementById("blanket");
var battSelect = document.getElementById("batt");

var kitNumInput = document.getElementById("kitnum");
var whistleNumInput = document.getElementById("whistlenum");
var clotheNumInput = document.getElementById("clothenum");
var blanketNumInput = document.getElementById("blanketnum");
var battNumInput = document.getElementById("battnum");

kitSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    kitNumInput.disabled = true;
  } else {
    kitNumInput.disabled = false;
  }
}

whistleSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    whistleNumInput.disabled = true;
  } else {
    whistleNumInput.disabled = false;
  }
}
clotheSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    clotheNumInput.disabled = true;
  } else {
    clotheNumInput.disabled = false;
  }
}

blanketSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    blanketNumInput.disabled = true;
  } else {
    blanketNumInput.disabled = false;
  }
}

battSelect.onchange = function () {
  if (this.value == "No" || this.value == "") {
    battNumInput.disabled = true;
  } else {
    battNumInput.disabled = false;
  }
}


    var docuSelect = document.getElementById('docu');
var docuNumInput = document.getElementById('docunum');

if (docuSelect.value == 'No' || docuSelect.value == '') {
  docuNumInput.disabled = true;
} else {
  docuNumInput.disabled = false;
}

docuSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    docuNumInput.disabled = true;
  } else {
    docuNumInput.disabled = false;
  }
}


    var hungerSelect = document.getElementById('hungerhappen');
var nHungerInput = document.getElementById('nhunger');
var mHungerInput = document.getElementById('mhunger');
var nHungersInput = document.getElementById('nhungers');
var mHungersInput = document.getElementById('mhungers');
var nHungertInput = document.getElementById('nhungert');
var mHungertInput = document.getElementById('mhungert');

if (hungerSelect.value == 'No' || hungerSelect.value == '') {
  nHungerInput.disabled = true;
  mHungerInput.disabled = true;
  nHungersInput.disabled = true;
  mHungersInput.disabled = true;
  nHungertInput.disabled = true;
  mHungertInput.disabled = true;
} else {
  nHungerInput.disabled = false;
  mHungerInput.disabled = false;
  nHungersInput.disabled = false;
  mHungersInput.disabled = false;
  nHungertInput.disabled = false;
  mHungertInput.disabled = false;
}

hungerSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    nHungerInput.disabled = true;
    mHungerInput.disabled = true;
    nHungersInput.disabled = true;
    mHungersInput.disabled = true;
    nHungertInput.disabled = true;
    mHungertInput.disabled = true;
  } else {
    nHungerInput.disabled = false;
    mHungerInput.disabled = false;
    nHungersInput.disabled = false;
    mHungersInput.disabled = false;
    nHungertInput.disabled = false;
    mHungertInput.disabled = false;
  }
}


    var deathHouseholdSelect = document.getElementById('deathhousehold');
var deathOInput = document.getElementById('deatho');
var deathOSexInput = document.getElementById('deathosex');
var deathOTimeInput = document.getElementById('deathotime');
var deathOCauseInput = document.getElementById('deathocause');
var deathTInput = document.getElementById('deatht');
var deathTSexInput = document.getElementById('deathtsex');
var deathTTimeInput = document.getElementById('deathttime');
var deathTCauseInput = document.getElementById('deathtcause');
var deathTHInput = document.getElementById('deathth');
var deathTHSexInput = document.getElementById('deaththsex');
var deathTHTimeInput = document.getElementById('deaththtime');
var deathTHCauseInput = document.getElementById('deatthcause');

if (deathHouseholdSelect.value == 'No' || deathHouseholdSelect.value == '') {
    deathOInput.disabled = true;
    deathOSexInput.disabled = true;
    deathOTimeInput.disabled = true;
    deathOCauseInput.disabled = true;
    deathTInput.disabled = true;
    deathTSexInput.disabled = true;
    deathTTimeInput.disabled = true;
    deathTCauseInput.disabled = true;
    deathTHInput.disabled = true;
    deathTHSexInput.disabled = true;
    deathTHTimeInput.disabled = true;
    deathTHCauseInput.disabled = true;
} else {
    deathOInput.disabled = false;
    deathOSexInput.disabled = false;
    deathOTimeInput.disabled = false;
    deathOCauseInput.disabled = false;
    deathTInput.disabled = false;
    deathTSexInput.disabled = false;
    deathTTimeInput.disabled = false;
    deathTCauseInput.disabled = false;
    deathTHInput.disabled = false;
    deathTHSexInput.disabled = false;
    deathTHTimeInput.disabled = false;
    deathTHCauseInput.disabled = false;
}

deathHouseholdSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        deathOInput.disabled = true;
        deathOSexInput.disabled = true;
        deathOTimeInput.disabled = true;
        deathOCauseInput.disabled = true;
        deathTInput.disabled = true;
        deathTSexInput.disabled = true;
        deathTTimeInput.disabled = true;
        deathTCauseInput.disabled = true;
        deathTHInput.disabled = true;
        deathTHSexInput.disabled = true;
        deathTHTimeInput.disabled = true;
        deathTHCauseInput.disabled = true;
    } else {
        deathOInput.disabled = false;
        deathOSexInput.disabled = false;
        deathOTimeInput.disabled = false;
        deathOCauseInput.disabled = false;
        deathTInput.disabled = false;
        deathTSexInput.disabled = false;
        deathTTimeInput.disabled = false;
        deathTCauseInput.disabled = false;
        deathTHInput.disabled = false;
        deathTHSexInput.disabled = false;
        deathTHTimeInput.disabled = false;
        deathTHCauseInput.disabled = false;
    }
}


var slpSelect = document.getElementById('slp');
var slpNameInput = document.getElementById('slpname');
var memoInput = document.getElementById('memo');
var memopInput = document.getElementById('memop');
var memoiInput = document.getElementById('memoi');

if (slpSelect.value == 'No' || slpSelect.value == '') {
    slpNameInput.disabled = true;
    memoInput.disabled = true;
    memopInput.disabled = true;
    memoiInput.disabled = true;
} else {
    slpNameInput.disabled = false;
    memoInput.disabled = false;
    memopInput.disabled = false;
    memoiInput.disabled = false;
}

slpSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
        slpNameInput.disabled = true;
        memoInput.disabled = true;
        memopInput.disabled = true;
        memoiInput.disabled = true;
    } else {
        slpNameInput.disabled = false;
        memoInput.disabled = false;
        memopInput.disabled = false;
        memoiInput.disabled = false;
    }
}



    var ffwSelect = document.getElementById('ffw');
var ffwNameInput = document.getElementById('ffwname');
var memTwInput = document.getElementById('memtw');
var memTwPInput = document.getElementById('memtwp');
var memTwPIInput = document.getElementById('memtwpi');

if (ffwSelect.value == 'No' || ffwSelect.value == '') {
  ffwNameInput.disabled = true;
  memTwInput.disabled = true;
  memTwPInput.disabled = true;
  memTwPIInput.disabled = true;
} else {
  ffwNameInput.disabled = false;
  memTwInput.disabled = false;
  memTwPInput.disabled = false;
  memTwPIInput.disabled = false;
}

ffwSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    ffwNameInput.disabled = true;
    memTwInput.disabled = true;
    memTwPInput.disabled = true;
    memTwPIInput.disabled = true;
  } else {
    ffwNameInput.disabled = false;
    memTwInput.disabled = false;
    memTwPInput.disabled = false;
    memTwPIInput.disabled = false;
  }
}


    var cfwSelect = document.getElementById('cfw');
var cfwNameInput = document.getElementById('cfwname');
var memThInput = document.getElementById('memth');
var memThPInput = document.getElementById('memthp');
var memThPIInput = document.getElementById('memthpi');

if (cfwSelect.value == 'No' || cfwSelect.value == '') {
  cfwNameInput.disabled = true;
  memThInput.disabled = true;
  memThPInput.disabled = true;
  memThPIInput.disabled = true;
} else {
  cfwNameInput.disabled = false;
  memThInput.disabled = false;
  memThPInput.disabled = false;
  memThPIInput.disabled = false;
}

cfwSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    cfwNameInput.disabled = true;
    memThInput.disabled = true;
    memThPInput.disabled = true;
    memThPIInput.disabled = true;
  } else {
    cfwNameInput.disabled = false;
    memThInput.disabled = false;
    memThPInput.disabled = false;
    memThPIInput.disabled = false;
  }
}


    var pensionSelect = document.getElementById('pension');
var pensionNameInput = document.getElementById('pensionaname');
var memFInput = document.getElementById('memf');
var memFPInput = document.getElementById('memfp');
var memFPIInput = document.getElementById('memfpi');

if (pensionSelect.value == 'No' || pensionSelect.value == '') {
  pensionNameInput.disabled = true;
  memFInput.disabled = true;
  memFPInput.disabled = true;
  memFPIInput.disabled = true;
} else {
  pensionNameInput.disabled = false;
  memFInput.disabled = false;
  memFPInput.disabled = false;
  memFPIInput.disabled = false;
}

pensionSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    pensionNameInput.disabled = true;
    memFInput.disabled = true;
    memFPInput.disabled = true;
    memFPIInput.disabled = true;
  } else {
    pensionNameInput.disabled = false;
    memFInput.disabled = false;
    memFPInput.disabled = false;
    memFPIInput.disabled = false;
  }
}

    var pppSelect = document.getElementById('ppp');
var pppNameInput = document.getElementById('pppname');
var memFivInput = document.getElementById('memfiv');
var memFipInput = document.getElementById('memfip');
var memFipiInput = document.getElementById('memfipi');

if (pppSelect.value == 'No' || pppSelect.value == '') {
  pppNameInput.disabled = true;
  memFivInput.disabled = true;
  memFipInput.disabled = true;
  memFipiInput.disabled = true;
} else {
  pppNameInput.disabled = false;
  memFivInput.disabled = false;
  memFipInput.disabled = false;
  memFipiInput.disabled = false;
}

pppSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    pppNameInput.disabled = true;
    memFivInput.disabled = true;
    memFipInput.disabled = true;
    memFipiInput.disabled = true;
  } else {
    pppNameInput.disabled = false;
    memFivInput.disabled = false;
    memFipInput.disabled = false;
    memFipiInput.disabled = false;
  }
}


    var arcDpSelect = document.getElementById('arcdp');
var arcDpNameInput = document.getElementById('arcdpname');
var memSInput = document.getElementById('mems');
var memSpInput = document.getElementById('memsp');
var memSpiInput = document.getElementById('memspi');

if (arcDpSelect.value == 'No' || arcDpSelect.value == '') {
  arcDpNameInput.disabled = true;
  memSInput.disabled = true;
  memSpInput.disabled = true;
  memSpiInput.disabled = true;
} else {
  arcDpNameInput.disabled = false;
  memSInput.disabled = false;
  memSpInput.disabled = false;
  memSpiInput.disabled = false;
}

arcDpSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    arcDpNameInput.disabled = true;
    memSInput.disabled = true;
    memSpInput.disabled = true;
    memSpiInput.disabled = true;
  } else {
    arcDpNameInput.disabled = false;
    memSInput.disabled = false;
    memSpInput.disabled = false;
    memSpiInput.disabled = false;
  }
}


    var twspSelect = document.getElementById('twsp');
var twspNameInput = document.getElementById('twspname');
var memSeInput = document.getElementById('memse');
var memSePInput = document.getElementById('memsep');
var memSePIInput = document.getElementById('memsepi');

if (twspSelect.value == 'No' || twspSelect.value == '') {
  twspNameInput.disabled = true;
  memSeInput.disabled = true;
  memSePInput.disabled = true;
  memSePIInput.disabled = true;
} else {
  twspNameInput.disabled = false;
  memSeInput.disabled = false;
  memSePInput.disabled = false;
  memSePIInput.disabled = false;
}

twspSelect.onchange = function () {
  if (this.value == 'No' || this.value == '') {
    twspNameInput.disabled = true;
    memSeInput.disabled = true;
    memSePInput.disabled = true;
    memSePIInput.disabled = true;
  } else {
    twspNameInput.disabled = false;
    memSeInput.disabled = false;
    memSePInput.disabled = false;
    memSePIInput.disabled = false;
  }
}

    var cbepSelect = document.getElementById('cbep');
var cbepNameInput = document.getElementById('cbepname');
var memEInput = document.getElementById('meme');
var memEPInput = document.getElementById('memep');
var memEPIInput = document.getElementById('memepi');

if (cbepSelect.value == 'No' || cbepSelect.value == '') {
  cbepNameInput.disabled = true;
  memEInput.disabled = true;
  memEPInput.disabled = true;
  memEPIInput.disabled = true;
} else {
  cbepNameInput.disabled = false;
  memEInput.disabled = false;
  memEPInput.disabled = false;
  memEPIInput.disabled = false;
}

cbepSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    cbepNameInput.disabled = true;
    memEInput.disabled = true;
    memEPInput.disabled = true;
    memEPIInput.disabled = true;
  } else {
    cbepNameInput.disabled = false;
    memEInput.disabled = false;
    memEPInput.disabled = false;
    memEPIInput.disabled = false;
  }
}


    var ohiSelect = document.getElementById('ohi');
var ohiNameInput = document.getElementById('ohiname');
var othiInput = document.getElementById('othi');
var memnInput = document.getElementById('memn');
var memntInput = document.getElementById('memnt');
var memnpInput = document.getElementById('memnp');
var memntpInput = document.getElementById('memntp');
var memnpiInput = document.getElementById('memnpi');
var memntpiInput = document.getElementById('memntpi');

if (ohiSelect.value == 'No' || ohiSelect.value == '') {
  ohiNameInput.disabled = true;
  othiInput.disabled = true;
  memnInput.disabled = true;
  memntInput.disabled = true;
  memnpInput.disabled = true;
  memntpInput.disabled = true;
  memnpiInput.disabled = true;
  memntpiInput.disabled = true;
} else {
  ohiNameInput.disabled = false;
  othiInput.disabled = false;
  memnInput.disabled = false;
  memntInput.disabled = false;
  memnpInput.disabled = false;
  memntpInput.disabled = false;
  memnpiInput.disabled = false;
  memntpiInput.disabled = false;
}

ohiSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    ohiNameInput.disabled = true;
    othiInput.disabled = true;
    memnInput.disabled = true;
    memntInput.disabled = true;
    memnpInput.disabled = true;
    memntpInput.disabled = true;
    memnpiInput.disabled = true;
    memntpiInput.disabled = true;
  } else {
    ohiNameInput.disabled = false;
    othiInput.disabled = false;
    memnInput.disabled = false;
    memntInput.disabled = false;
    memnpInput.disabled = false;
    memntpInput.disabled = false;
    memnpiInput.disabled = false;
    memntpiInput.disabled = false;
  }
}

    var healthSelect = document.getElementById('health');
var healthNameInput = document.getElementById('healthname');
var nameHealthInput = document.getElementById('namehealth');
var memTeInput = document.getElementById('memte');
var memTenInput = document.getElementById('memten');
var memTePInput = document.getElementById('memtep');
var memTenPInput = document.getElementById('memtenp');
var memTePIInput = document.getElementById('memtepi');
var memTenPIInput = document.getElementById('memtenpi');

if (healthSelect.value == 'No' || healthSelect.value == '') {
  healthNameInput.disabled = true;
  nameHealthInput.disabled = true;
  memTeInput.disabled = true;
  memTenInput.disabled = true;
  memTePInput.disabled = true;
  memTenPInput.disabled = true;
  memTePIInput.disabled = true;
  memTenPIInput.disabled = true;
} else {
  healthNameInput.disabled = false;
  nameHealthInput.disabled = false;
  memTeInput.disabled = false;
  memTenInput.disabled = false;
  memTePInput.disabled = false;
  memTenPInput.disabled = false;
  memTePIInput.disabled = false;
  memTenPIInput.disabled = false;
}

healthSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    healthNameInput.disabled = true;
    nameHealthInput.disabled = true;
    memTeInput.disabled = true;
    memTenInput.disabled = true;
    memTePInput.disabled = true;
    memTenPInput.disabled = true;
    memTePIInput.disabled = true;
    memTenPIInput.disabled = true;
  } else {
    healthNameInput.disabled = false;
    nameHealthInput.disabled = false;
    memTeInput.disabled = false;
    memTenInput.disabled = false;
    memTePInput.disabled = false;
    memTenPInput.disabled = false;
    memTePIInput.disabled = false;
    memTenPIInput.disabled = false;
  }
}



    var feedingSelect = document.getElementById("feeding");
var feedingNameInput = document.getElementById("feedingname");
var nameFeedingInput = document.getElementById("namefeeding");
var memElInput = document.getElementById("memel");
var memEleInput = document.getElementById("memele");
var memElPInput = document.getElementById("memelp");
var memElePInput = document.getElementById("memelep");
var memElPIInput = document.getElementById("memelpi");
var memElePIInput = document.getElementById("memelepi");

if (feedingSelect.value == "No" || feedingSelect.value == "") {
    feedingNameInput.disabled = true;
    nameFeedingInput.disabled = true;
    memElInput.disabled = true;
    memEleInput.disabled = true;
    memElPInput.disabled = true;
    memElePInput.disabled = true;
    memElPIInput.disabled = true;
    memElePIInput.disabled = true;
} else {
    feedingNameInput.disabled = false;
    nameFeedingInput.disabled = false;
    memElInput.disabled = false;
    memEleInput.disabled = false;
    memElPInput.disabled = false;
    memElePInput.disabled = false;
    memElPIInput.disabled = false;
    memElePIInput.disabled = false;
}

feedingSelect.onchange = function () {
    if (this.value == "No" || this.value == "") {
        feedingNameInput.disabled = true;
        nameFeedingInput.disabled = true;
        memElInput.disabled = true;
        memEleInput.disabled = true;
        memElPInput.disabled = true;
        memElePInput.disabled = true;
        memElPIInput.disabled = true;
        memElePIInput.disabled = true;
    } else {
        feedingNameInput.disabled = false;
        nameFeedingInput.disabled = false;
        memElInput.disabled = false;
        memEleInput.disabled = false;
        memElPInput.disabled = false;
        memElePInput.disabled = false;
        memElPIInput.disabled = false;
        memElePIInput.disabled = false;
    }
}


var scholarSelect = document.getElementById('scholar');
var scholarNameInput = document.getElementById('namescholar');
var nameScholarInput = document.getElementById('scholarname');
var memTweInput = document.getElementById('memtwe');
var memTweLInput = document.getElementById('memtwel');
var memTwePInput = document.getElementById('memtwep');
var memTweLPInput = document.getElementById('memtwelp');
var memTwePIInput = document.getElementById('memtwepi');
var memTweLPIInput = document.getElementById('memtwelpi');

if (scholarSelect.value == 'No' || scholarSelect.value == '') {
  scholarNameInput.disabled = true;
  nameScholarInput.disabled = true;
  memTweInput.disabled = true;
  memTweLInput.disabled = true;
  memTwePInput.disabled = true;
  memTweLPInput.disabled = true;
  memTwePIInput.disabled = true;
  memTweLPIInput.disabled = true;
} else {
  scholarNameInput.disabled = false;
  nameScholarInput.disabled = false;
  memTweInput.disabled = false;
  memTweLInput.disabled = false;
  memTwePInput.disabled = false;
  memTweLPInput.disabled = false;
  memTwePIInput.disabled = false;
  memTweLPIInput.disabled = false;
}

scholarSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    scholarNameInput.disabled = true;
    nameScholarInput.disabled = true;
    memTweInput.disabled = true;
    memTweLInput.disabled = true;
    memTwePInput.disabled = true;
    memTweLPInput.disabled = true;
    memTwePIInput.disabled = true;
    memTweLPIInput.disabled = true;
  } else {
    scholarNameInput.disabled = false;
    nameScholarInput.disabled = false;
    memTweInput.disabled = false;
    memTweLInput.disabled = false;
    memTwePInput.disabled = false;
    memTweLPInput.disabled = false;
    memTwePIInput.disabled = false;
    memTweLPIInput.disabled = false;
  }
}


    var sltrpSelect = document.getElementById('sltrp');
var sltrpNameInput = document.getElementById('sltrpname');
var nameSltrpInput = document.getElementById('namesltrp');
var memThrInput = document.getElementById('memthr');
var memThrIInput = document.getElementById('memthri');
var memThrPInput = document.getElementById('memthrp');
var memThrPIInput = document.getElementById('memthrip');
var memThrPIIInput = document.getElementById('memthrpi');
var memThrPIIIInput = document.getElementById('memthripi');

if (sltrpSelect.value == 'No' || sltrpSelect.value == '') {
  sltrpNameInput.disabled = true;
  nameSltrpInput.disabled = true;
  memThrInput.disabled = true;
  memThrIInput.disabled = true;
  memThrPInput.disabled = true;
  memThrPIInput.disabled = true;
  memThrPIIInput.disabled = true;
  memThrPIIIInput.disabled = true;
} else {
  sltrpNameInput.disabled = false;
  nameSltrpInput.disabled = false;
  memThrInput.disabled = false;
  memThrIInput.disabled = false;
  memThrPInput.disabled = false;
  memThrPIInput.disabled = false;
  memThrPIIInput.disabled = false;
  memThrPIIIInput.disabled = false;
}

sltrpSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    sltrpNameInput.disabled = true;
    nameSltrpInput.disabled = true;
    memThrInput.disabled = true;
    memThrIInput.disabled = true;
    memThrPInput.disabled = true;
    memThrPIInput.disabled = true;
    memThrPIIInput.disabled = true;
    memThrPIIIInput.disabled = true;
  } else {
    sltrpNameInput.disabled = false;
    nameSltrpInput.disabled = false;
    memThrInput.disabled = false;
    memThrIInput.disabled = false;
    memThrPInput.disabled = false;
    memThrPIInput.disabled = false;
    memThrPIIInput.disabled = false;
    memThrPIIIInput.disabled = false;
  }
}




    var creditSelect = document.getElementById('credit');
var nameCreditInput = document.getElementById('namecredit');
var creditNameInput = document.getElementById('creditname');
var memFouInput = document.getElementById('memfou');
var memFourInput = document.getElementById('memfour');
var memFouPInput = document.getElementById('memfoup');
var memFourPInput = document.getElementById('memfourp');
var memFouPIInput = document.getElementById('memfoupi');
var memFourPIInput = document.getElementById('memfourpi');

if (creditSelect.value == 'No' || creditSelect.value == '') {
  nameCreditInput.disabled = true;
  creditNameInput.disabled = true;
  memFouInput.disabled = true;
  memFourInput.disabled = true;
  memFouPInput.disabled = true;
  memFourPInput.disabled = true;
  memFouPIInput.disabled = true;
  memFourPIInput.disabled = true;
} else {
  nameCreditInput.disabled = false;
  creditNameInput.disabled = false;
  memFouInput.disabled = false;
  memFourInput.disabled = false;
  memFouPInput.disabled = false;
  memFourPInput.disabled = false;
  memFouPIInput.disabled = false;
  memFourPIInput.disabled = false;
}

creditSelect.onchange = function() {
  if (this.value == 'No' || this.value == '') {
    nameCreditInput.disabled = true;
    creditNameInput.disabled = true;
    memFouInput.disabled = true;
    memFourInput.disabled = true;
    memFouPInput.disabled = true;
    memFourPInput.disabled = true;
    memFouPIInput.disabled = true;
    memFourPIInput.disabled = true;
  } else {
    nameCreditInput.disabled = false;
    creditNameInput.disabled = false;
    memFouInput.disabled = false;
    memFourInput.disabled = false;
    memFouPInput.disabled = false;
    memFourPInput.disabled = false;
    memFouPIInput.disabled = false;
    memFourPIInput.disabled = false;
  }
}




  var housingSelect = document.getElementById('housing');
  var housingNameInput = document.getElementById('housingname');
  var nameHousingInput = document.getElementById('namehousing');
  var memFiInput = document.getElementById('memfi');
  var memFiFInput = document.getElementById('memfif');
  var memFiFPInput = document.getElementById('memfifp');
  var memFiFTPInput = document.getElementById('memfiftp');
  var memFiFPIInput = document.getElementById('memfifpi');
  var memFiFTPIInput = document.getElementById('memfiftpi');
  if (housingSelect.value == 'No' || housingSelect.value == '') {
    housingNameInput.disabled = true;
    nameHousingInput.disabled = true;
    memFiInput.disabled = true;
    memFiFInput.disabled = true;
    memFiFPInput.disabled = true;
    memFiFTPInput.disabled = true;
    memFiFPIInput.disabled = true;
    memFiFTPIInput.disabled = true;
  } else {
    housingNameInput.disabled = false;
    nameHousingInput.disabled = false;
    memFiInput.disabled = false;
    memFiFInput.disabled = false;
    memFiFPInput.disabled = false;
    memFiFTPInput.disabled = false;
    memFiFPIInput.disabled = false;
    memFiFTPIInput.disabled = false;
  }
  housingSelect.onchange = function() {
    if (this.value == 'No' || this.value == '') {
      housingNameInput.disabled = true;
      nameHousingInput.disabled = true;
      memFiInput.disabled = true;
      memFiFInput.disabled = true;
      memFiFPInput.disabled = true;
      memFiFTPInput.disabled = true;
      memFiFPIInput.disabled = true;
      memFiFTPIInput.disabled = true;
    } else {
      housingNameInput.disabled = false;
      nameHousingInput.disabled = false;
      memFiInput.disabled = false;
      memFiFInput.disabled = false;
      memFiFPInput.disabled = false;
      memFiFTPInput.disabled = false;
      memFiFPIInput.disabled = false;
      memFiFTPIInput.disabled = false;
    }
  }
    
    }
