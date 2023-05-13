document.getElementById("watersupply").onchange = function () {
    if (this.value == 'Own use faucet, community water system' || this.value == '') {
        document.getElementById("waternum").disabled = true;
    }
    else if (this.value == 'Peddler') {
        document.getElementById("waternum").disabled = true;
    }
    else if (this.value == 'Bottled water') {
        document.getElementById("waternum").disabled = true;

    } else {
        document.getElementById("waternum").disabled = false;
    }

}

document.getElementById("tenure").onchange = function () {
    if (this.value == 'Rent house or room including lot' || this.value == '') {
        document.getElementById("rentnpm").disabled = true;
    }
    else if (this.value == ' Living in a public space with rent' || this.value == '') {
        document.getElementById("rentnpm").disabled = true;
    }
    else {
        document.getElementById("rentnpm").disabled = false;
    }

}
document.getElementById("electric").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("electricsrc").disabled = true;
        document.getElementById("generator").disabled = true;
        document.getElementById("solar").disabled = true;
        document.getElementById("battery").disabled = true;
        document.getElementById("electrico").disabled = true;
    }
    else {
        document.getElementById("electricsrc").disabled = false;
        document.getElementById("generator").disabled = false;
        document.getElementById("solar").disabled = false;
        document.getElementById("battery").disabled = false;
        document.getElementById("electrico").disabled = false;
    }

}
document.getElementById("landagri").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("landagrinum").disabled = true;
    }
    else {
        document.getElementById("landagrinum").disabled = false;
    }

}
document.getElementById("landres").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("landresnum").disabled = true;
    }
    else {
        document.getElementById("landresnum").disabled = false;
    }

}
document.getElementById("landcom").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("landcomnum").disabled = true;
    }
    else {
        document.getElementById("landcomnum").disabled = false;
    }

}
document.getElementById("car").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("carnum").disabled = true;
    }
    else {
        document.getElementById("carnum").disabled = false;
    }

}
document.getElementById("tricycle").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("trciyclenum").disabled = true;
    }
    else {
        document.getElementById("trciyclenum").disabled = false;
    }

}

document.getElementById("bicycle").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("bicyclenum").disabled = true;
    }
    else {
        document.getElementById("bicyclenum").disabled = false;
    }

}
document.getElementById("pedi").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("pedinum").disabled = true;
    }
    else {
        document.getElementById("pedinum").disabled = false;
    }

}
document.getElementById("tv").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("tvnum").disabled = true;
    }
    else {
        document.getElementById("tvnum").disabled = false;
    }

}
document.getElementById("casette").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("casettenum").disabled = true;
    }
    else {
        document.getElementById("casettenum").disabled = false;
    }

}
document.getElementById("dvd").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("dvdnum").disabled = true;
    }
    else {
        document.getElementById("dvdnum").disabled = false;
    }

}
document.getElementById("karaoke").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("karaokenum").disabled = true;
    }
    else {
        document.getElementById("karaokenum").disabled = false;
    }

}
document.getElementById("cell").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("cellnum").disabled = true;
    }
    else {
        document.getElementById("cellnum").disabled = false;
    }

}
document.getElementById("tel").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("telnum").disabled = true;
    }
    else {
        document.getElementById("telnum").disabled = false;
    }

}
document.getElementById("comp").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("compnum").disabled = true;
    }
    else {
        document.getElementById("compnum").disabled = false;
    }

}
document.getElementById("fan").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("fannum").disabled = true;
    }
    else {
        document.getElementById("fannum").disabled = false;
    }

}
document.getElementById("aircon").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("airconum").disabled = true;
    }
    else {
        document.getElementById("airconum").disabled = false;
    }

}
document.getElementById("iron").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("ironnum").disabled = true;
    }
    else {
        document.getElementById("ironnum").disabled = false;
    }

}
document.getElementById("washing").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("washingnum").disabled = true;
    }
    else {
        document.getElementById("washingnum").disabled = false;
    }

}
document.getElementById("ref").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("refnum").disabled = true;
    }
    else {
        document.getElementById("refnum").disabled = false;
    }

}
document.getElementById("stove").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("stovenum").disabled = true;
    }
    else {
        document.getElementById("stovenum").disabled = false;
    }

}
document.getElementById("rice").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("ricenum").disabled = true;
    }
    else {
        document.getElementById("ricenum").disabled = false;
    }

}
document.getElementById("oven").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("ovennum").disabled = true;
    }
    else {
        document.getElementById("ovennum").disabled = false;
    }

}
document.getElementById("toaster").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("toasternum").disabled = true;
    }
    else {
        document.getElementById("toasternum").disabled = false;
    }

}
document.getElementById("dispenser").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("dispensernum").disabled = true;
    }
    else {
        document.getElementById("dispensernum").disabled = false;
    }

}
document.getElementById("sala").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("salanum").disabled = true;
    }
    else {
        document.getElementById("salanum").disabled = false;
    }

}
document.getElementById("mats").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("matsnum").disabled = true;
    }
    else {
        document.getElementById("matsnum").disabled = false;
    }

}
document.getElementById("folding").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("foldingnum").disabled = true;
    }
    else {
        document.getElementById("foldingnum").disabled = false;
    }

}
document.getElementById("sofa").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("sofanum").disabled = true;
    }
    else {
        document.getElementById("sofanum").disabled = false;
    }

}
document.getElementById("house").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("houseinsurance").disabled = true;
    }
    else {
        document.getElementById("houseinsurance").disabled = false;
    }

}
document.getElementById("motor").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("motorinsurance").disabled = true;
    }
    else {
        document.getElementById("motorinsurance").disabled = false;
    }

}
document.getElementById("app").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("appinsurance").disabled = true;
    }
    else {
        document.getElementById("appinsurance").disabled = false;
    }

}


document.getElementById("gcollection").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("gcollect").disabled = true;
        document.getElementById("gnum").disabled = true;

    }
    else {
        document.getElementById("gcollect").disabled = false;
        document.getElementById("gnum").disabled = false;
    }

}




document.getElementById("crop").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("tenurestatus").disabled = true;
        document.getElementById("harvestyrs").disabled = true;
        document.getElementById("agrilandnum").disabled = true;
        document.getElementById("tempcrops").disabled = true;
        document.getElementById("tempcropskilo").disabled = true;
        document.getElementById("permacrops").disabled = true;
        document.getElementById("permaccropskilo").disabled = true;
        document.getElementById("tcrops").disabled = true;
        document.getElementById("tcropskilo").disabled = true;
        document.getElementById("pcrops").disabled = true;
        document.getElementById("pcropskilo").disabled = true;
        document.getElementById("hcrops").disabled = true;
        document.getElementById("hcropskilo").disabled = true;
        document.getElementById("beastnum").disabled = true;
        document.getElementById("beastown").disabled = true;
        document.getElementById("plownum").disabled = true;
        document.getElementById("plowown").disabled = true;
        document.getElementById("harrownum").disabled = true;
        document.getElementById("harrowown").disabled = true;
        document.getElementById("mowernum").disabled = true;
        document.getElementById("mowerown").disabled = true;
        document.getElementById("cornnum").disabled = true;
        document.getElementById("cornown").disabled = true;
        document.getElementById("spraynum").disabled = true;
        document.getElementById("sprayown").disabled = true;
        document.getElementById("tractornum").disabled = true;
        document.getElementById("tractorown").disabled = true;
        document.getElementById("htractornum").disabled = true;
        document.getElementById("htractorown").disabled = true;
        document.getElementById("turtlenum").disabled = true;
        document.getElementById("turtleown").disabled = true;
        document.getElementById("planternum").disabled = true;
        document.getElementById("planterown").disabled = true;
        document.getElementById("dryernum").disabled = true;
        document.getElementById("dryeown").disabled = true;
        document.getElementById("mdrynum").disabled = true;
        document.getElementById("mdryown").disabled = true;
        document.getElementById("millnum").disabled = true;
        document.getElementById("millown").disabled = true;
        document.getElementById("harvesternum").disabled = true;
        document.getElementById("harvesterown").disabled = true;
        document.getElementById("granarynum").disabled = true;
        document.getElementById("granaryown").disabled = true;
        document.getElementById("shednum").disabled = true;
        document.getElementById("shedown").disabled = true;
        document.getElementById("pumpnum").disabled = true;
        document.getElementById("pumpown").disabled = true;
        document.getElementById("agriequip").disabled = true;
        document.getElementById("agriequipnum").disabled = true;
        document.getElementById("cropcash").disabled = true;
        document.getElementById("cropkind").disabled = true;


    }
    else {
        document.getElementById("tenurestatus").disabled = false;
        document.getElementById("harvestyrs").disabled = false;
        document.getElementById("agrilandnum").disabled = false;
        document.getElementById("tempcrops").disabled = false;
        document.getElementById("tempcropskilo").disabled = false;
        document.getElementById("permacrops").disabled = false;
        document.getElementById("permaccropskilo").disabled = false;
        document.getElementById("tcrops").disabled = false;
        document.getElementById("tcropskilo").disabled = false;
        document.getElementById("pcrops").disabled = false;
        document.getElementById("pcropskilo").disabled = false;
        document.getElementById("hcrops").disabled = false;
        document.getElementById("hcropskilo").disabled = false;
        document.getElementById("beastnum").disabled = false;
        document.getElementById("beastown").disabled = false;
        document.getElementById("plownum").disabled = false;
        document.getElementById("plowown").disabled = false;
        document.getElementById("harrownum").disabled = false;
        document.getElementById("harrowown").disabled = false;
        document.getElementById("mowernum").disabled = false;
        document.getElementById("mowerown").disabled = false;
        document.getElementById("cornnum").disabled = false;
        document.getElementById("cornown").disabled = false;
        document.getElementById("spraynum").disabled = false;
        document.getElementById("sprayown").disabled = false;
        document.getElementById("tractornum").disabled = false;
        document.getElementById("tractorown").disabled = false;
        document.getElementById("htractornum").disabled = false;
        document.getElementById("htractorown").disabled = false;
        document.getElementById("turtlenum").disabled = false;
        document.getElementById("turtleown").disabled = false;
        document.getElementById("planternum").disabled = false;
        document.getElementById("planterown").disabled = false;
        document.getElementById("dryernum").disabled = false;
        document.getElementById("dryerown").disabled = false;
        document.getElementById("mdrynum").disabled = false;
        document.getElementById("mdryown").disabled = false;
        document.getElementById("millnum").disabled = false;
        document.getElementById("millown").disabled = false;
        document.getElementById("harvesternum").disabled = false;
        document.getElementById("harvesterown").disabled = false;
        document.getElementById("granarynum").disabled = false;
        document.getElementById("granaryown").disabled = false;
        document.getElementById("shednum").disabled = false;
        document.getElementById("shedown").disabled = false;
        document.getElementById("pumpnum").disabled = false;
        document.getElementById("pumpown").disabled = false;
        document.getElementById("agriequip").disabled = false;
        document.getElementById("agriequipnum").disabled = false;
        document.getElementById("cropcash").disabled = false;
        document.getElementById("cropkind").disabled = false;
    }

}
document.getElementById("livestock").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("animals").disabled = true;
        document.getElementById("animalssold").disabled = true;
        document.getElementById("animalsconsume").disabled = true;
        document.getElementById("meat").disabled = true;
        document.getElementById("meatsold").disabled = true;
        document.getElementById("meatconsume").disabled = true;
        document.getElementById("milk").disabled = true;
        document.getElementById("milksold").disabled = true;
        document.getElementById("milkconsume").disabled = true;
        document.getElementById("eggs").disabled = true;
        document.getElementById("eggsold").disabled = true;
        document.getElementById("eggconsume").disabled = true;
        document.getElementById("otherlivestock").disabled = true;
        document.getElementById("otherlivestocksold").disabled = true;
        document.getElementById("otherlivestockconsume").disabled = true;
        document.getElementById("livestocknum").disabled = true;
        document.getElementById("livestockc").disabled = true;
        document.getElementById("livestockr").disabled = true;
        document.getElementById("livestocki").disabled = true;
        document.getElementById("livestockip").disabled = true;
        document.getElementById("livecash").disabled = true;
        document.getElementById("livekind").disabled = true;


    }
    else {
        document.getElementById("animals").disabled = false;
        document.getElementById("animalssold").disabled = false;
        document.getElementById("animalsconsume").disabled = false;
        document.getElementById("meat").disabled = false;
        document.getElementById("meatsold").disabled = false;
        document.getElementById("meatconsume").disabled = false;
        document.getElementById("milk").disabled = false;
        document.getElementById("milksold").disabled = false;
        document.getElementById("milkconsume").disabled = false;
        document.getElementById("eggs").disabled = false;
        document.getElementById("eggsold").disabled = false;
        document.getElementById("eggconsume").disabled = false;
        document.getElementById("otherlivestock").disabled = false;
        document.getElementById("otherlivestocksold").disabled = false;
        document.getElementById("otherlivestockconsume").disabled = false;
        document.getElementById("livestocknum").disabled = false;
        document.getElementById("livecash").disabled = false;
        document.getElementById("livekind").disabled = false;
    }

}
document.getElementById("livestocknum").onchange = function () {
    if (this.value == 'Not more than 3 years' || this.value == '') {


        document.getElementById("livestockc").disabled = true;
        document.getElementById("livestockr").disabled = true;
        document.getElementById("livestocki").disabled = true;
        document.getElementById("livestockip").disabled = true;



    }
    else {

        document.getElementById("livestockc").disabled = false;
        document.getElementById("livestockr").disabled = false;
        document.getElementById("livestocki").disabled = false;
        document.getElementById("livestockip").disabled = false;
    }

}
document.getElementById("livestockc").onchange = function () {
    if (this.value == 'Remain the same' || this.value == 'Increase') {



        document.getElementById("livestockr").disabled = true;
        document.getElementById("livestocki").disabled = false;




    }
    else {


        document.getElementById("livestockr").disabled = false;
        document.getElementById("livestocki").disabled = true;

    }

}
document.getElementById("livestocki").onchange = function () {
    if (this.value == 'No' || this.value == '') {




        document.getElementById("livestockip").disabled = true;




    }
    else {



        document.getElementById("livestockip").disabled = false;

    }

}


document.getElementById("fishing").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("catching").disabled = true;
        document.getElementById("culturing").disabled = true;
        document.getElementById("fishone").disabled = true;
        document.getElementById("fishoneown").disabled = true;
        document.getElementById("fishtwo").disabled = true;
        document.getElementById("fishtwoown").disabled = true;
        document.getElementById("fishthree").disabled = true;
        document.getElementById("fishthreeown").disabled = true;
        document.getElementById("fishfour").disabled = true;
        document.getElementById("fishfourown").disabled = true;
        document.getElementById("fishfive").disabled = true;
        document.getElementById("fishfiveown").disabled = true;
        document.getElementById("fishyrs").disabled = true;
        document.getElementById("fishyrsc").disabled = true;
        document.getElementById("fishr").disabled = true;
        document.getElementById("fishi").disabled = true;
        document.getElementById("fiship").disabled = true;
        document.getElementById("fishcash").disabled = true;
        document.getElementById("fishkind").disabled = true;



    }
    else {
        document.getElementById("catching").disabled = false;
        document.getElementById("culturing").disabled = false;
        document.getElementById("fishone").disabled = false;
        document.getElementById("fishoneown").disabled = false;
        document.getElementById("fishtwo").disabled = false;
        document.getElementById("fishtwoown").disabled = false;
        document.getElementById("fishthree").disabled = false;
        document.getElementById("fishthreeown").disabled = false;
        document.getElementById("fishfour").disabled = false;
        document.getElementById("fishfourown").disabled = false;
        document.getElementById("fishfive").disabled = false;
        document.getElementById("fishfiveown").disabled = false;
        document.getElementById("fishyrs").disabled = false;
        document.getElementById("fishcash").disabled = false;
        document.getElementById("fishkind").disabled = false;
    }

}
document.getElementById("fishyrs").onchange = function () {
    if (this.value == 'Not more than 3 years' || this.value == '') {

        document.getElementById("fishyrsc").disabled = true;
        document.getElementById("fishr").disabled = true;
        document.getElementById("fishi").disabled = true;
        document.getElementById("fiship").disabled = true;



    }
    else {
        document.getElementById("fishyrsc").disabled = false;
        document.getElementById("fishr").disabled = false;
        document.getElementById("fishi").disabled = false;
        document.getElementById("fiship").disabled = false;
    }

}

document.getElementById("forestry").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("forestcash").disabled = true;
        document.getElementById("forestkind").disabled = true;




    }
    else {
        document.getElementById("forestcash").disabled = false;
        document.getElementById("forestkind").disabled = false;

    }

}

document.getElementById("forestry").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("forestcash").disabled = true;
        document.getElementById("forestkind").disabled = true;




    }
    else {
        document.getElementById("forestcash").disabled = false;
        document.getElementById("forestkind").disabled = false;

    }

}
document.getElementById("wholesale").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("wholesalecash").disabled = true;
        document.getElementById("wholesalekind").disabled = true;




    }
    else {
        document.getElementById("wholesalecash").disabled = false;
        document.getElementById("wholesalekind").disabled = false;

    }

}
document.getElementById("manufacturing").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("manucash").disabled = true;
        document.getElementById("manukind").disabled = true;




    }
    else {
        document.getElementById("manucash").disabled = false;
        document.getElementById("manukind").disabled = false;

    }

}
document.getElementById("community").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("servcash").disabled = true;
        document.getElementById("servkind").disabled = true;




    }
    else {
        document.getElementById("servcash").disabled = false;
        document.getElementById("servkind").disabled = false;

    }

}
document.getElementById("storage").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("transpocash").disabled = true;
        document.getElementById("transpokind").disabled = true;




    }
    else {
        document.getElementById("transpocash").disabled = false;
        document.getElementById("transpokind").disabled = false;

    }

}

document.getElementById("mining").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("miningcash").disabled = true;
        document.getElementById("miningkind").disabled = true;




    }
    else {
        document.getElementById("miningcash").disabled = false;
        document.getElementById("miningkind").disabled = false;

    }

}
document.getElementById("construct").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("constcash").disabled = true;
        document.getElementById("constkind").disabled = true;




    }
    else {
        document.getElementById("constcash").disabled = false;
        document.getElementById("constkind").disabled = false;

    }

}
document.getElementById("elsewhere").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("actcash").disabled = true;
        document.getElementById("actkind").disabled = true;




    }
    else {
        document.getElementById("actcash").disabled = false;
        document.getElementById("actkind").disabled = false;

    }

}




document.getElementById("catching").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("fishloc").disabled = true;
        document.getElementById("boatone").disabled = true;
        document.getElementById("boatoneown").disabled = true;
        document.getElementById("boattwo").disabled = true;
        document.getElementById("boattwoown").disabled = true;
        document.getElementById("boatthree").disabled = true;
        document.getElementById("boathreeown").disabled = true;
        document.getElementById("boatfour").disabled = true;
        document.getElementById("boatfourown").disabled = true;
        document.getElementById("boatfive").disabled = true;
        document.getElementById("boatfiveown").disabled = true;
        document.getElementById("gearone").disabled = true;
        document.getElementById("gearoneown").disabled = true;
        document.getElementById("geartwo").disabled = true;
        document.getElementById("geartwoown").disabled = true;
        document.getElementById("gearthree").disabled = true;
        document.getElementById("gearthreeown").disabled = true;
        document.getElementById("gearfour").disabled = true;
        document.getElementById("gearfourown").disabled = true;



    }
    else {
        document.getElementById("fishloc").disabled = false;
        document.getElementById("boatone").disabled = false;
        document.getElementById("boatoneown").disabled = false;
        document.getElementById("boattwo").disabled = false;
        document.getElementById("boattwoown").disabled = false;
        document.getElementById("boatthree").disabled = false;
        document.getElementById("boathreeown").disabled = false;
        document.getElementById("boatfour").disabled = false;
        document.getElementById("boatfourown").disabled = false;
        document.getElementById("boatfive").disabled = false;
        document.getElementById("boatfiveown").disabled = false;
        document.getElementById("gearone").disabled = false;
        document.getElementById("gearoneown").disabled = false;
        document.getElementById("geartwo").disabled = false;
        document.getElementById("geartwoown").disabled = false;
        document.getElementById("gearthree").disabled = false;
        document.getElementById("gearthreeown").disabled = false;
        document.getElementById("gearfour").disabled = false;
        document.getElementById("gearfourown").disabled = false;
    }

}
document.getElementById("culturing").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("pond").disabled = true;
        document.getElementById("fishp").disabled = true;
        document.getElementById("fishc").disabled = true;
        document.getElementById("seaweed").disabled = true;
        document.getElementById("oyster").disabled = true;
        document.getElementById("mussel").disabled = true;
        document.getElementById("fisht").disabled = true;
        document.getElementById("hatchery").disabled = true;
        document.getElementById("aquaot").disabled = true;



    }
    else {
        document.getElementById("pond").disabled = false;
        document.getElementById("fishp").disabled = false;
        document.getElementById("fishc").disabled = false;
        document.getElementById("seaweed").disabled = false;
        document.getElementById("oyster").disabled = false;
        document.getElementById("mussel").disabled = false;
        document.getElementById("fisht").disabled = false;
        document.getElementById("hatchery").disabled = false;
        document.getElementById("aquaot").disabled = false;
    }

}

document.getElementById("livingnum").onchange = function () {
    if (this.value == 'Not more than 3 years' || this.value == '') {
        document.getElementById("harvestyrs").disabled = true;
        document.getElementById("harvestr").disabled = true;
        document.getElementById("harvestpr").disabled = true;
        document.getElementById("samecrop").disabled = true;
        document.getElementById("samecropr").disabled = true;
        document.getElementById("difcrop").disabled = true;
        document.getElementById("difcropr").disabled = true;
        document.getElementById("cropi").disabled = true;
        document.getElementById("cropiprov").disabled = true;
        document.getElementById("agrif").disabled = true;
        document.getElementById("agrifprov").disabled = true;

    }
    else {

        document.getElementById("harvestyrs").disabled = false;
        document.getElementById("harvestr").disabled = false;
        document.getElementById("harvestpr").disabled = false;
        document.getElementById("samecrop").disabled = false;

        document.getElementById("difcrop").disabled = false;

        document.getElementById("cropi").disabled = false;

        document.getElementById("agrif").disabled = false;

    }

}
document.getElementById("samecrop").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("samecropr").disabled = true;

    }
    else {



        document.getElementById("samecropr").disabled = false;

    }

}
document.getElementById("difcrop").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("difcropr").disabled = true;

    }
    else {



        document.getElementById("difcropr").disabled = false;

    }

}
document.getElementById("cropi").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("cropiprov").disabled = true;

    }
    else {



        document.getElementById("cropiprov").disabled = false;

    }

}
document.getElementById("agrif").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("agrifprov").disabled = true;

    }
    else {



        document.getElementById("agrifprov").disabled = false;

    }

}

document.getElementById("water").onchange = function () {
    if (this.value == 'Decrease' || this.value == '') {

        document.getElementById("waterr").disabled = false;



    }
    else {



        document.getElementById("waterr").disabled = true;

    }

}

document.getElementById("floodt").onchange = function () {
    if (this.value == 'Yes' || this.value == '') {

        document.getElementById("floodhrs").disabled = false;
        document.getElementById("floodmnths").disabled = false;



    }
    else {


        document.getElementById("floodhrs").disabled = true;
        document.getElementById("floodmnths").disabled = true;


    }

}

document.getElementById("drought").onchange = function () {
    if (this.value == 'Yes' || this.value == '') {

        document.getElementById("droughtnum").disabled = false;




    }
    else {


        document.getElementById("droughtnum").disabled = true;



    }

}
document.getElementById("moveout").onchange = function () {
    if (this.value == 'Yes' || this.value == '') {

        document.getElementById("moveoutr").disabled = false;
        document.getElementById("evacuate").disabled = false;



    }
    else {


        document.getElementById("moveoutr").disabled = true;
        document.getElementById("evacuate").disabled = true;


    }

}

document.getElementById("evacuate").onchange = function () {
    if (this.value == 'Yes' || this.value == '') {

        document.getElementById("evacuateloc").disabled = false;
        document.getElementById("evacuatenum").disabled = false;



    }
    else {


        document.getElementById("evacuateloc").disabled = true;
        document.getElementById("evacuatenum").disabled = true;



    }

}


document.getElementById("typhoon").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("typhoonnum").disabled = true;
        document.getElementById("typhoona").disabled = true;




    }
    else {
        document.getElementById("typhoonnum").disabled = false;

        document.getElementById("typhoona").disabled = false;



    }

}
document.getElementById("typhoona").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("typhoonsrc").disabled = true;



    }
    else {

        document.getElementById("typhoonsrc").disabled = false;




    }

}
document.getElementById("flood").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("floodnum").disabled = true;
        document.getElementById("flooda").disabled = true;





    }
    else {
        document.getElementById("floodnum").disabled = false;

        document.getElementById("flooda").disabled = false;





    }

}
document.getElementById("flooda").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("floodsrc").disabled = true;



    }
    else {

        document.getElementById("floodsrc").disabled = false;




    }

}
document.getElementById("drough").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("droughnum").disabled = true;
        document.getElementById("droughta").disabled = true;





    }
    else {
        document.getElementById("droughnum").disabled = false;

        document.getElementById("droughta").disabled = false;




    }

}
document.getElementById("droughta").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("droughtsrc").disabled = true;



    }
    else {

        document.getElementById("droughtsrc").disabled = false;




    }

}
document.getElementById("quake").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("quakenum").disabled = true;
        document.getElementById("quakea").disabled = true;





    }
    else {
        document.getElementById("quakenum").disabled = false;

        document.getElementById("quakea").disabled = false;





    }

}
document.getElementById("quakea").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("quakesrc").disabled = true;



    }
    else {

        document.getElementById("quakesrc").disabled = false;




    }

}

document.getElementById("erupt").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("eruptnum").disabled = true;
        document.getElementById("erupta").disabled = true;




    }
    else {
        document.getElementById("eruptnum").disabled = false;

        document.getElementById("erupta").disabled = false;





    }

}
document.getElementById("erupta").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("eruptsrc").disabled = true;



    }
    else {

        document.getElementById("eruptsrc").disabled = false;




    }

}

document.getElementById("landslide").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("landslidenum").disabled = true;
        document.getElementById("landslinea").disabled = true;





    }
    else {
        document.getElementById("landslidenum").disabled = false;

        document.getElementById("landslinea").disabled = false;



    }

}
document.getElementById("landslinea").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("landslinesrc").disabled = true;



    }
    else {

        document.getElementById("landslinesrc").disabled = false;




    }

}

document.getElementById("tsunami").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("tsunaminum").disabled = true;
        document.getElementById("tsunamia").disabled = true;





    }
    else {
        document.getElementById("tsunaminum").disabled = false;

        document.getElementById("tsunamia").disabled = false;





    }

}
document.getElementById("tsunamia").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("tsunamisrc").disabled = true;



    }
    else {

        document.getElementById("tsunamisrc").disabled = false;




    }

}

document.getElementById("fire").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("firenum").disabled = true;
        document.getElementById("firea").disabled = true;





    }
    else {
        document.getElementById("firenum").disabled = false;

        document.getElementById("firea").disabled = false;





    }

}
document.getElementById("firea").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("firesrc").disabled = true;



    }
    else {

        document.getElementById("firesrc").disabled = false;




    }

}


document.getElementById("forest").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("forestnum").disabled = true;
        document.getElementById("foresta").disabled = true;




    }
    else {
        document.getElementById("forestnum").disabled = false;

        document.getElementById("foresta").disabled = false;





    }

}
document.getElementById("foresta").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("forestsrc").disabled = true;



    }
    else {

        document.getElementById("forestsrc").disabled = false;




    }

}













document.getElementById("conflict").onchange = function () {
    if (this.value == 'No' || this.value == '') {
        document.getElementById("conflictnum").disabled = true;
        document.getElementById("conflicta").disabled = true;




    }
    else {

        document.getElementById("conflictnum").disabled = false;
        document.getElementById("conflicta").disabled = false;




    }

}
document.getElementById("conflicta").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("conflictsrc").disabled = true;



    }
    else {

        document.getElementById("conflictsrc").disabled = false;




    }

}
document.getElementById("osa").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("osasrc").disabled = true;



    }
    else {

        document.getElementById("osasrc").disabled = false;




    }

}
document.getElementById("disasterprepaidnesskit").onchange = function () {
    if (this.value == 'No' || this.value == '') {

        document.getElementById("watery").disabled = true;

        document.getElementById("food").disabled = true;

        document.getElementById("match").disabled = true;

        document.getElementById("light").disabled = true;
        document.getElementById("radio").disabled = true;
        document.getElementById("casette").disabled = true;

        document.getElementById("candle").disabled = true;

        document.getElementById("kit").disabled = true;
        document.getElementById("whistle").disabled = true;

        document.getElementById("clothe").disabled = true;

        document.getElementById("blanket").disabled = true;

        document.getElementById("batt").disabled = true;

        document.getElementById("batt").disabled = true;

        document.getElementById("docu").disabled = true;
        document.getElementById("othr").disabled = true;




    }
    else {

        document.getElementById("watery").disabled = false;

        document.getElementById("food").disabled = false;

        document.getElementById("match").disabled = false;

        document.getElementById("light").disabled = false;

        document.getElementById("radio").disabled = false;

        document.getElementById("candle").disabled = false;
        ;
        document.getElementById("kit").disabled = false;
        document.getElementById("whistle").disabled = false;

        document.getElementById("clothe").disabled = false;

        document.getElementById("blanket").disabled = false;

        document.getElementById("batt").disabled = false;

        document.getElementById("docu").disabled = false;
        document.getElementById("othr").disabled = false;







    }

}
document.getElementById("osa").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("osasrc").disabled = true;





    }
    else {

        document.getElementById("osasrc").disabled = false;








    }


}
document.getElementById("watery").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("waterynum").disabled = true;





    }
    else {

        document.getElementById("waterynum").disabled = false;








    }


}
document.getElementById("food").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("foodnum").disabled = true;





    }
    else {

        document.getElementById("foodnum").disabled = false;








    }

}
document.getElementById("match").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("matchnum").disabled = true;





    }
    else {

        document.getElementById("matchnum").disabled = false;








    }

}

document.getElementById("light").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("lightnum").disabled = true;





    }
    else {

        document.getElementById("lightnum").disabled = false;








    }

}
document.getElementById("radio").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("radionum").disabled = true;





    }
    else {

        document.getElementById("radionum").disabled = false;








    }

}
document.getElementById("candle").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("candlenum").disabled = true;





    }
    else {

        document.getElementById("candlenum").disabled = false;








    }

}
document.getElementById("kit").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("kitnum").disabled = true;





    }
    else {

        document.getElementById("kitnum").disabled = false;








    }

}
document.getElementById("whistle").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("whistlenum").disabled = true;





    }
    else {

        document.getElementById("whistlenum").disabled = false;








    }

}
document.getElementById("clothe").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("clothenum").disabled = true;





    }
    else {

        document.getElementById("clothenum").disabled = false;








    }

}
document.getElementById("blanket").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("blanketnum").disabled = true;





    }
    else {

        document.getElementById("blanketnum").disabled = false;








    }

}

document.getElementById("batt").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("battnum").disabled = true;





    }
    else {

        document.getElementById("battnum").disabled = false;








    }

}
document.getElementById("docu").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("docunum").disabled = true;





    }
    else {

        document.getElementById("docunum").disabled = false;








    }

}



document.getElementById("hungerhappen").onchange = function () {
    if (this.value == 'No' || this.value == '') {


        document.getElementById("nhunger").disabled = true;
        document.getElementById("mhunger").disabled = true;
        document.getElementById("nhungers").disabled = true;
        document.getElementById("mhungers").disabled = true;
        document.getElementById("nhungert").disabled = true;
        document.getElementById("mhungert").disabled = true;





    }
    else {

        document.getElementById("nhunger").disabled = false;
        document.getElementById("mhunger").disabled = false;
        document.getElementById("nhungers").disabled = false;
        document.getElementById("mhungers").disabled = false;
        document.getElementById("nhungert").disabled = false;
        document.getElementById("mhungert").disabled = false;









    }

}


document.getElementById("deathhousehold").onchange = function () {
    if (this.value == 'No' || this.value == '') {




        document.getElementById("deatho").disabled = true;
        document.getElementById("deathosex").disabled = true;
        document.getElementById("deathotime").disabled = true;
        document.getElementById("deathocause").disabled = true;
        document.getElementById("deatht").disabled = true;
        document.getElementById("deathtsex").disabled = true;
        document.getElementById("deathttime").disabled = true;
        document.getElementById("deathtcause").disabled = true;
        document.getElementById("deathth").disabled = true;
        document.getElementById("deaththsex").disabled = true;
        document.getElementById("deaththtime").disabled = true;
        document.getElementById("deatthcause").disabled = true;






    }
    else {

        document.getElementById("deatho").disabled = false;
        document.getElementById("deathosex").disabled = false;
        document.getElementById("deathotime").disabled = false;
        document.getElementById("deathocause").disabled = false;
        document.getElementById("deatht").disabled = false;
        document.getElementById("deathtsex").disabled = false;
        document.getElementById("deathttime").disabled = false;
        document.getElementById("deathtcause").disabled = false;
        document.getElementById("deathth").disabled = false;
        document.getElementById("deaththsex").disabled = false;
        document.getElementById("deaththtime").disabled = false;
        document.getElementById("deatthcause").disabled = false;


    }

}

document.getElementById("slp").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("slpname").disabled = true;
        document.getElementById("memo").disabled = true;
        document.getElementById("memop").disabled = true;
        document.getElementById("memoi").disabled = true;





    }
    else {

        document.getElementById("slpname").disabled = false;
        document.getElementById("memo").disabled = false;
        document.getElementById("memop").disabled = false;
        document.getElementById("memoi").disabled = false;;


    }

}
document.getElementById("ffw").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("ffwname").disabled = true;
        document.getElementById("memtw").disabled = true;
        document.getElementById("memtwp").disabled = true;
        document.getElementById("memtwpi").disabled = true;





    }
    else {

        document.getElementById("ffwname").disabled = false;
        document.getElementById("memtw").disabled = false;
        document.getElementById("memtwp").disabled = false;
        document.getElementById("memtwpi").disabled = false;;


    }

}

document.getElementById("cfw").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("cfwname").disabled = true;
        document.getElementById("memth").disabled = true;
        document.getElementById("memthp").disabled = true;
        document.getElementById("memthpi").disabled = true;





    }
    else {

        document.getElementById("cfwname").disabled = false;
        document.getElementById("memth").disabled = false;
        document.getElementById("memthp").disabled = false;
        document.getElementById("memthpi").disabled = false;;


    }

}
document.getElementById("pension").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("pensionaname").disabled = true;
        document.getElementById("memf").disabled = true;
        document.getElementById("memfp").disabled = true;
        document.getElementById("memfpi").disabled = true;





    }
    else {

        document.getElementById("pensionaname").disabled = false;
        document.getElementById("memf").disabled = false;
        document.getElementById("memfp").disabled = false;
        document.getElementById("memfpi").disabled = false;;


    }

}

document.getElementById("ppp").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("pppname").disabled = true;
        document.getElementById("memfiv").disabled = true;
        document.getElementById("memfip").disabled = true;
        document.getElementById("memfipi").disabled = true;





    }
    else {

        document.getElementById("pppname").disabled = false;
        document.getElementById("memfiv").disabled = false;
        document.getElementById("memfip").disabled = false;
        document.getElementById("memfipi").disabled = false;;


    }

}
document.getElementById("arcdp").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("arcdpname").disabled = true;
        document.getElementById("mems").disabled = true;
        document.getElementById("memsp").disabled = true;
        document.getElementById("memspi").disabled = true;





    }
    else {

        document.getElementById("arcdpname").disabled = false;
        document.getElementById("mems").disabled = false;
        document.getElementById("memsp").disabled = false;
        document.getElementById("memspi").disabled = false;;


    }

}
document.getElementById("twsp").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("twspname").disabled = true;
        document.getElementById("memse").disabled = true;
        document.getElementById("memsep").disabled = true;
        document.getElementById("memsepi").disabled = true;





    }
    else {

        document.getElementById("twspname").disabled = false;
        document.getElementById("memse").disabled = false;
        document.getElementById("memsep").disabled = false;
        document.getElementById("memsepi").disabled = false;;


    }

}
document.getElementById("cbep").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("cbepname").disabled = true;
        document.getElementById("meme").disabled = true;
        document.getElementById("memep").disabled = true;
        document.getElementById("memepi").disabled = true;





    }
    else {

        document.getElementById("cbepname").disabled = false;
        document.getElementById("meme").disabled = false;
        document.getElementById("memep").disabled = false;
        document.getElementById("memepi").disabled = false;;


    }

}
document.getElementById("ohi").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("ohiname").disabled = true;
        document.getElementById("othi").disabled = true;
        document.getElementById("memn").disabled = true;
        document.getElementById("memnt").disabled = true;
        document.getElementById("memnp").disabled = true;
        document.getElementById("memntp").disabled = true;
        document.getElementById("memnpi").disabled = true;
        document.getElementById("memntpi").disabled = true;





    }
    else {

        document.getElementById("ohiname").disabled = false;
        document.getElementById("othi").disabled = false;
        document.getElementById("memn").disabled = false;
        document.getElementById("memnt").disabled = false;;
        document.getElementById("memnp").disabled = false;
        document.getElementById("memntp").disabled = false;
        document.getElementById("memnpi").disabled = false;
        document.getElementById("memntpi").disabled = false;;

    }

}
document.getElementById("health").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("healthname").disabled = true;
        document.getElementById("namehealth").disabled = true;
        document.getElementById("memte").disabled = true;
        document.getElementById("memten").disabled = true;
        document.getElementById("memtep").disabled = true;
        document.getElementById("memtenp").disabled = true;
        document.getElementById("memtepi").disabled = true;
        document.getElementById("memtenpi").disabled = true;

        ;




    }
    else {

        document.getElementById("healthname").disabled = false;
        document.getElementById("namehealth").disabled = false;
        document.getElementById("memte").disabled = false;
        document.getElementById("memten").disabled = false;
        document.getElementById("memtep").disabled = false;
        document.getElementById("memtenp").disabled = false;
        document.getElementById("memtepi").disabled = false;
        document.getElementById("memtenpi").disabled = false;

    }

}
document.getElementById("feeding").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("feedingname").disabled = true;
        document.getElementById("namefeeding").disabled = true;
        document.getElementById("memel").disabled = true;
        document.getElementById("memele").disabled = true;
        document.getElementById("memelp").disabled = true;
        document.getElementById("memelep").disabled = true;
        document.getElementById("memelpi").disabled = true;
        document.getElementById("memelepi").disabled = true;





    }
    else {

        document.getElementById("feedingname").disabled = false;
        document.getElementById("namefeeding").disabled = false;
        document.getElementById("memel").disabled = false;
        document.getElementById("memele").disabled = false;
        document.getElementById("memelp").disabled = false;
        document.getElementById("memelep").disabled = false;
        document.getElementById("memelpi").disabled = false;
        document.getElementById("memelepi").disabled = false;


    }

}
document.getElementById("scholar").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("namescholar").disabled = true;
        document.getElementById("scholarname").disabled = true;
        document.getElementById("memtwe").disabled = true;
        document.getElementById("memtwel").disabled = true;
        document.getElementById("memtwep").disabled = true;
        document.getElementById("memtwelp").disabled = true;
        document.getElementById("memtwepi").disabled = true;
        document.getElementById("memtwelpi").disabled = true;





    }
    else {

        document.getElementById("namescholar").disabled = false;
        document.getElementById("scholarname").disabled = false;
        document.getElementById("memtwe").disabled = false;
        document.getElementById("memtwel").disabled = false;
        document.getElementById("memtwep").disabled = false;
        document.getElementById("memtwelp").disabled = false;
        document.getElementById("memtwepi").disabled = false;
        document.getElementById("memtwelpi").disabled = false;


    }

}
document.getElementById("sltrp").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("sltrpname").disabled = true;
        document.getElementById("namesltrp").disabled = true;
        document.getElementById("memthr").disabled = true;
        document.getElementById("memthri").disabled = true;
        document.getElementById("memthrp").disabled = true;
        document.getElementById("memthrip").disabled = true;
        document.getElementById("memthrpi").disabled = true;
        document.getElementById("memthripi").disabled = true;





    }
    else {

        document.getElementById("sltrpname").disabled = false;
        document.getElementById("namesltrp").disabled = false;
        document.getElementById("memthr").disabled = false;
        document.getElementById("memthri").disabled = false;
        document.getElementById("memthrp").disabled = false;
        document.getElementById("memthrip").disabled = false;
        document.getElementById("memthrpi").disabled = false;
        document.getElementById("memthripi").disabled = false;


    }

}
document.getElementById("credit").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("namecredit").disabled = true;
        document.getElementById("creditname").disabled = true;
        document.getElementById("memfou").disabled = true;
        document.getElementById("memfour").disabled = true;
        document.getElementById("memfoup").disabled = true;
        document.getElementById("memfourp").disabled = true;
        document.getElementById("memfoupi").disabled = true;
        document.getElementById("memfourpi").disabled = true;





    }
    else {

        document.getElementById("namecredit").disabled = false;
        document.getElementById("creditname").disabled = false;
        document.getElementById("memfou").disabled = false;
        document.getElementById("memfour").disabled = false;
        document.getElementById("memfoup").disabled = false;
        document.getElementById("memfourp").disabled = false;
        document.getElementById("memfoupi").disabled = false;
        document.getElementById("memfourpi").disabled = false;


    }

}

document.getElementById("housing").onchange = function () {
    if (this.value == 'No' || this.value == '') {



        document.getElementById("housingname").disabled = true;
        document.getElementById("namehousing").disabled = true;
        document.getElementById("memfi").disabled = true;
        document.getElementById("memfif").disabled = true;
        document.getElementById("memfifp").disabled = true;
        document.getElementById("memfiftp").disabled = true;
        document.getElementById("memfifpi").disabled = true;
        document.getElementById("memfiftpi").disabled = true;





    }
    else {

        document.getElementById("housingname").disabled = false;
        document.getElementById("namehousing").disabled = false;
        document.getElementById("memfi").disabled = false;
        document.getElementById("memfif").disabled = false;
        document.getElementById("memfifp").disabled = false;
        document.getElementById("memfiftp").disabled = false;
        document.getElementById("memfifpi").disabled = false;
        document.getElementById("memfiftpi").disabled = false;


    }

}

