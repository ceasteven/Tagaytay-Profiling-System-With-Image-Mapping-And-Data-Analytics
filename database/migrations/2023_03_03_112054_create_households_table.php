<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->id();
            $table->integer('housecontrolnum')->nullable();
            $table->text('headname')->nullable();
            $table->text('watersupply')->nullable();
            $table->integer('waternum')->nullable();
            $table->text('toilettype')->nullable();
            $table->text('tenure')->nullable();
            $table->text('rentpm')->nullable();
            $table->text('fuel')->nullable();
            $table->text('electric')->nullable();
            $table->text('electricsrc')->nullable();
            $table->text('generator')->nullable();
            $table->text('solar')->nullable();
            $table->text('battery')->nullable();
            $table->text('electrico')->nullable();
            $table->text('landagri')->nullable();
            $table->integer('landagrinum')->nullable();
            $table->text('landres')->nullable();
            $table->integer('landresum')->nullable();
            $table->text('landcom')->nullable();
            $table->integer('landcomnum')->nullable();
            $table->text('car')->nullable();
            $table->integer('carnum')->nullable();
            $table->text('tricycle')->nullable();
            $table->integer('trciyclenum')->nullable();
            $table->text('bicycle')->nullable();
            $table->integer('bicyclenum')->nullable();
            $table->text('pedi')->nullable();
            $table->integer('pedinum')->nullable();
            $table->text('tv')->nullable();
            $table->integer('tvnum')->nullable();
            $table->text('dvd')->nullable();
            $table->integer('dvdnum')->nullable();
            $table->text('casette')->nullable();
            $table->integer('casettenum')->nullable();
            $table->text('karaoke')->nullable();
            $table->integer('karaokenum')->nullable();
            $table->text('cell')->nullable();
            $table->integer('cellnum')->nullable();
            $table->text('tel')->nullable();
            $table->integer('telnum')->nullable();
            $table->text('comp')->nullable();
            $table->integer('compnum')->nullable();
            $table->text('fan')->nullable();
            $table->integer('fannum')->nullable();
            $table->text('aircon')->nullable();
            $table->integer('airconum')->nullable();
            $table->text('iron')->nullable();
            $table->integer('ironnum')->nullable();
            $table->text('washing')->nullable();
            $table->integer('washingnum')->nullable();
            $table->text('ref')->nullable();
            $table->integer('refnum')->nullable();
            $table->text('stove')->nullable();
            $table->integer('stovenum')->nullable();
            $table->text('rice')->nullable();
            $table->integer('ricenum')->nullable();
            $table->text('oven')->nullable();
            $table->integer('ovennum')->nullable();
            $table->text('toaster')->nullable();
            $table->integer('toasternum')->nullable();
            $table->text('dispenser')->nullable();
            $table->integer('dispensernum')->nullable();
            $table->text('sala')->nullable();
            $table->integer('salanum')->nullable();
            $table->text('mats')->nullable();
            $table->integer('matsnum')->nullable();
            $table->text('folding')->nullable();
            $table->integer('foldingnum')->nullable();
            $table->text('sofa')->nullable();
            $table->text('sofanum')->nullable();
            $table->text('othersname')->nullable();
            $table->integer('othersnum')->nullable();
            $table->text('internet')->nullable();
            $table->text('house')->nullable();
            $table->text('houseinsurance')->nullable();
            $table->text('motor')->nullable();
            $table->text('motorinsurance')->nullable();
            $table->text('app')->nullable();
            $table->text('appinsurance')->nullable();
            $table->text('gcollection')->nullable();
            $table->text('burn')->nullable();
            $table->text('compost')->nullable();
            $table->text('recycle')->nullable();
            $table->text('waste')->nullable();
            $table->text('pitw')->nullable();
            $table->text('pitwo')->nullable();
            $table->text('throwing')->nullable();
            $table->text('gothers')->nullable();
            $table->text('gcollect')->nullable();
            $table->text('gnum')->nullable();


            $table->text('crop')->nullable();
            $table->integer('cropcash')->nullable();
            $table->integer('cropkind')->nullable();
            $table->text('livestock')->nullable();
            $table->integer('livecash')->nullable();
            $table->integer('livekind')->nullable();
            $table->text('fishing')->nullable();
            $table->integer('fishcash')->nullable();
            $table->integer('fishkind')->nullable();
            $table->text('forestry')->nullable();
            $table->integer('forestycash')->nullable();
            $table->integer('forestykind')->nullable();
            $table->text('wholesale')->nullable();
            $table->integer('wholesalecash')->nullable();
            $table->integer('wholesalekind')->nullable();
            $table->text('manufacturing')->nullable();
            $table->integer('manucash')->nullable();
            $table->integer('manukind')->nullable();
            $table->text('community')->nullable();
            $table->integer('servcash')->nullable();
            $table->integer('servkind')->nullable();
            $table->text('storage')->nullable();
            $table->integer('transpocash')->nullable();
            $table->integer('transpokind')->nullable();
            $table->text('mining')->nullable();
            $table->integer('miningcash')->nullable();
            $table->integer('miningkind')->nullable();
            $table->text('construct')->nullable();
            $table->integer('constcash')->nullable();
            $table->integer('constkind')->nullable();
            $table->text('elsewhere')->nullable();
            $table->integer('actcash')->nullable();
            $table->integer('actkind')->nullable();
            $table->integer('totalnetincomecash')->nullable();
            $table->integer('totalneticomekind')->nullable();
            $table->integer('totalsalarykind')->nullable();
            $table->integer('totalsalarycash')->nullable();
            $table->integer('ofwcash')->nullable();
            $table->integer('ofwkind')->nullable();
            $table->integer('abroadcash')->nullable();
            $table->integer('abroadkind')->nullable();
            $table->integer('domesticcash')->nullable();
            $table->integer('domestickind')->nullable();
            $table->integer('pensioncash')->nullable();
            $table->integer('pensionkind')->nullable();
            $table->integer('netsharecash')->nullable();
            $table->integer('netsharekind')->nullable();
            $table->integer('rentalscash')->nullable();
            $table->integer('rentalskind')->nullable();
            $table->integer('interestcash')->nullable();
            $table->integer('interestkind')->nullable();
            $table->integer('investcash')->nullable();
            $table->integer('investkind')->nullable();
            $table->integer('sourcecash')->nullable();
            $table->text('sourcekind')->nullable();
            $table->integer('totalgrosscash')->nullable();
            $table->integer('totalgrosskind')->nullable();
            $table->integer('totalimputed')->nullable();
            $table->integer('totalcash')->nullable();
            $table->integer('totalkind')->nullable();
            $table->integer('totalincome')->nullable();

            $table->text('tenurestatus')->nullable();
            $table->text('agrilandnum')->nullable();
            $table->text('tempcrops')->nullable();
            $table->integer('tempcropskilo')->nullable();
            $table->text('permacrops')->nullable();
            $table->integer('permaccropskilo')->nullable();
            $table->text('tcrops')->nullable();
            $table->integer('tcropskilo')->nullable();
            $table->text('pcrops')->nullable();
            $table->integer('pcropskilo')->nullable();
            $table->text('hcrops')->nullable();
            $table->integer('hcropskilo')->nullable();
            $table->integer('beastnum')->nullable();
            $table->integer('beastown')->nullable();
            $table->integer('plownum')->nullable();
            $table->integer('plowown')->nullable();
            $table->integer('harrownum')->nullable();
            $table->integer('harrowown')->nullable();
            $table->integer('mowernum')->nullable();
            $table->integer('mowerown')->nullable();
            $table->integer('cornnum')->nullable();
            $table->integer('cornown')->nullable();
            $table->integer('spraynum')->nullable();
            $table->integer('sprayown')->nullable();
            $table->integer('tractornum')->nullable();
            $table->integer('tractorown')->nullable();
            $table->integer('htractornum')->nullable();
            $table->integer('htractorown')->nullable();
            $table->integer('turtlenum')->nullable();
            $table->integer('turtleown')->nullable();
            $table->integer('planternum')->nullable();
            $table->integer('planterown')->nullable();
            $table->integer('dryernum')->nullable();
            $table->integer('dryeown')->nullable();
            $table->integer('mdrynum')->nullable();
            $table->integer('mdryown')->nullable();
            $table->integer('millnum')->nullable();
            $table->integer('millown')->nullable();
            $table->integer('harvesternum')->nullable();
            $table->integer('harvesterown')->nullable();
            $table->integer('granarynum')->nullable();
            $table->integer('granaryown')->nullable();
            $table->integer('shednum')->nullable();
            $table->integer('shedown')->nullable();
            $table->integer('pumpnum')->nullable();
            $table->integer('pumpown')->nullable();
            $table->integer('agriequip')->nullable();
            $table->integer('agriequipnum')->nullable();
            $table->text('animals')->nullable();
            $table->integer('animalssold')->nullable();
            $table->integer('animalsconsume')->nullable();
            $table->text('meat')->nullable();
            $table->integer('meatsold')->nullable();
            $table->integer('meatconsume')->nullable();
            $table->text('milk')->nullable();
            $table->integer('milksold')->nullable();
            $table->integer('milkconsume')->nullable();
            $table->text('eggs')->nullable();
            $table->integer('eggsold')->nullable();
            $table->integer('eggconsume')->nullable();
            $table->text('otherlivestock')->nullable();
            $table->integer('otherlivestocksold')->nullable();
            $table->integer('otherlivestockconsume')->nullable();
            $table->text('catching')->nullable();
            $table->text('culturing')->nullable();
            $table->text('fishloc')->nullable();
            $table->text('boatone')->nullable();
            $table->integer('boatoneown')->nullable();
            $table->text('boattwo')->nullable();
            $table->integer('boattwoown')->nullable();
            $table->text('boatthree')->nullable();
            $table->integer('boathreeown')->nullable();
            $table->text('boatfour')->nullable();
            $table->integer('boatfourown')->nullable();
            $table->text('boatfive')->nullable();
            $table->integer('boatfiveown')->nullable();
            $table->text('gearone')->nullable();
            $table->integer('gearoneown')->nullable();
            $table->text('geartwo')->nullable();
            $table->integer('geartwoown')->nullable();
            $table->text('gearthree')->nullable();
            $table->integer('gearthreeown')->nullable();
            $table->text('gearfour')->nullable();
            $table->integer('gearfourown')->nullable();
            $table->text('pond')->nullable();
            $table->text('fishp')->nullable();
            $table->text('fishc')->nullable();
            $table->text('seaweed')->nullable();
            $table->text('oyster')->nullable();
            $table->text('mussel')->nullable();
            $table->text('fisht')->nullable();
            $table->text('hatchery')->nullable();
            $table->text('aquaot')->nullable();
            $table->text('fishone')->nullable();
            $table->integer('fishoneown')->nullable();
            $table->text('fishtwo')->nullable();
            $table->integer('fishtwoown')->nullable();
            $table->text('fishthree')->nullable();
            $table->integer('fishthreeown')->nullable();
            $table->text('fishfour')->nullable();
            $table->integer('fishfourown')->nullable();
            $table->text('fishfive')->nullable();
            $table->integer('fishfiveown')->nullable();
            $table->text('livingnum')->nullable();
            $table->text('harvestyrs')->nullable();
            $table->text('harvestr')->nullable();
            $table->text('harvestpr')->nullable();
            $table->text('samecrop')->nullable();
            $table->text('samecropr')->nullable();
            $table->text('difcrop')->nullable();
            $table->text('difcropr')->nullable();
            $table->text('cropi')->nullable();
            $table->text('cropiprov')->nullable();
            $table->text('agrif')->nullable();
            $table->text('agrifprov')->nullable();
            $table->text('livestocknum')->nullable();
            $table->text('livestockc')->nullable();
            $table->text('livestockr')->nullable();
            $table->text('livestocki')->nullable();
            $table->text('livestockip')->nullable();
            $table->text('fishyrs')->nullable();
            $table->text('fishyrsc')->nullable();
            $table->text('fishr')->nullable();
            $table->text('fishi')->nullable();
            $table->text('fiship')->nullable();
            $table->text('temp')->nullable();
            $table->text('brownout')->nullable();
            $table->text('sealevel')->nullable();
            $table->text('water')->nullable();
            $table->text('waterr')->nullable();
            $table->text('floodt')->nullable();
            $table->integer('floodhrs')->nullable();
            $table->integer('floodmnths')->nullable();
            $table->text('drought')->nullable();
            $table->integer('droughtnum')->nullable();
            $table->text('moveout')->nullable();
            $table->text('moveoutr')->nullable();
            $table->text('evacuate')->nullable();
            $table->text('evacuateloc')->nullable();
            $table->integer('evacuatenum')->nullable();
            $table->text('typhoon')->nullable();
            $table->integer('typhoonnum')->nullable();
            $table->text('typhoona')->nullable();
            $table->text('typhoonsrc')->nullable();
            $table->text('flood')->nullable();
            $table->integer('floodnum')->nullable();
            $table->text('flooda')->nullable();
            $table->text('floodsrc')->nullable();
            $table->text('drough')->nullable();
            $table->integer('droughnum')->nullable();
            $table->text('droughta')->nullable();
            $table->text('droughtsrc')->nullable();
            $table->text('quake')->nullable();
            $table->integer('quakenum')->nullable();
            $table->text('quakea')->nullable();
            $table->text('quakesrc')->nullable();
            $table->text('erupt')->nullable();
            $table->integer('eruptnum')->nullable();
            $table->text('erupta')->nullable();
            $table->text('eruptsrc')->nullable();
            $table->text('landslide')->nullable();
            $table->integer('landslidenum')->nullable();
            $table->text('landslinea')->nullable();
            $table->text('landslinesrc')->nullable();
            $table->text('tsunami')->nullable();
            $table->integer('tsunaminum')->nullable();
            $table->text('tsunamia')->nullable();
            $table->text('tsunamisrc')->nullable();
            $table->text('fire')->nullable();
            $table->integer('firenum')->nullable();
            $table->text('firea')->nullable();
            $table->text('firesrc')->nullable();
            $table->text('forest')->nullable();
            $table->integer('forestnum')->nullable();
            $table->text('foresta')->nullable();
            $table->text('forestsrc')->nullable();
            $table->text('conflict')->nullable();
            $table->integer('conflictnum')->nullable();
            $table->text('conflicta')->nullable();
            $table->text('conflictsrc')->nullable();
            $table->text('osname')->nullable();
            $table->integer('osnum')->nullable();
            $table->text('osa')->nullable();
            $table->text('osasrc')->nullable();
            $table->text('hungerhappen')->nullable();
            $table->text('nhunger')->nullable();
            $table->integer('mhunger')->nullable();
            $table->text('nhungers')->nullable();
            $table->integer('mhungers')->nullable();
            $table->text('nhungert')->nullable();
            $table->integer('mhungert')->nullable();
            $table->text('disasterprepaidnesskit')->nullable();
            $table->text('watery')->nullable();
            $table->integer('waterynum')->nullable();
            $table->text('food')->nullable();
            $table->integer('foodnum')->nullable();
            $table->text('match')->nullable();
            $table->integer('matchnum')->nullable();
            $table->text('light')->nullable();
            $table->integer('lightnum')->nullable();
            $table->text('radio')->nullable();
            $table->integer('radionum')->nullable();
            $table->text('candle')->nullable();
            $table->integer('candlenum')->nullable();
            $table->text('kit')->nullable();
            $table->integer('kitnum')->nullable();
            $table->text('whistle')->nullable();
            $table->integer('whistlenum')->nullable();
            $table->text('clothe')->nullable();
            $table->integer('clothenum')->nullable();
            $table->text('blanket')->nullable();
            $table->integer('blanketnum')->nullable();
            $table->text('batt')->nullable();
            $table->integer('battnum')->nullable();
            $table->text('docu')->nullable();
            $table->integer('docunum')->nullable();
            $table->text('othr')->nullable();
            $table->integer('othrnum')->nullable();
            $table->text('deathhousehold')->nullable();
            $table->text('deatho')->nullable();
            $table->text('deathosex')->nullable();
            $table->text('deathotime')->nullable();
            $table->text('deathocause')->nullable();
            $table->text('deatht')->nullable();
            $table->text('deathtsex')->nullable();
            $table->text('deathttime')->nullable();
            $table->text('deathtcause')->nullable();
            $table->text('deathth')->nullable();
            $table->text('deaththsex')->nullable();
            $table->text('deaththtime')->nullable();
            $table->text('deatthcause')->nullable();

            $table->text('slp')->nullable();
            $table->text('slpname')->nullable();
            $table->integer('memo')->nullable();
            $table->text('memop')->nullable();
            $table->text('memoi')->nullable();

            $table->text('ffw')->nullable();
            $table->text('ffwname')->nullable();
            $table->integer('memtw')->nullable();
            $table->text('memtwp')->nullable();
            $table->text('memtwpi')->nullable();


            $table->text('cfw')->nullable();
            $table->text('cfwname')->nullable();
            $table->integer('memth')->nullable();
            $table->text('memthp')->nullable();
            $table->text('memthpi')->nullable();

            $table->text('pension')->nullable();
            $table->text('pensionaname')->nullable();
            $table->integer('memf')->nullable();
            $table->text('memfp')->nullable();
            $table->text('memfpi')->nullable();

            $table->text('ppp')->nullable();
            $table->text('pppname')->nullable();
            $table->integer('memfiv')->nullable();
            $table->text('memfip')->nullable();
            $table->text('memfipi')->nullable();

            $table->text('arcdp')->nullable();
            $table->text('arcdpname')->nullable();
            $table->integer('mems')->nullable();
            $table->text('memsp')->nullable();
            $table->text('memspi')->nullable();


            $table->text('twsp')->nullable();
            $table->text('twspname')->nullable();
            $table->integer('memse')->nullable();
            $table->text('memsep')->nullable();
            $table->text('memsepi')->nullable();

            $table->text('cbep')->nullable();
            $table->text('cbepname')->nullable();
            $table->integer('meme')->nullable();
            $table->text('memep')->nullable();
            $table->text('memepi')->nullable();
            $table->text('ohi')->nullable();
            $table->text('ohiname')->nullable();
            $table->integer('memn')->nullable();
            $table->text('memnp')->nullable();
            $table->text('memnpi')->nullable();
            $table->text('othi')->nullable();
            $table->integer('memnt')->nullable();
            $table->text('memntp')->nullable();
            $table->text('memntpi')->nullable();

            $table->text('health')->nullable();
            $table->text('healthname')->nullable();
            $table->integer('memte')->nullable();
            $table->text('memtep')->nullable();
            $table->text('memtepi')->nullable();
            $table->text('namehealth')->nullable();
            $table->integer('memten')->nullable();

            $table->text('memtenp')->nullable();

            $table->text('memtenpi')->nullable();



            $table->text('feeding')->nullable();
            $table->text('feedingname')->nullable();
            $table->integer('memel')->nullable();
            $table->text('memelp')->nullable();
            $table->text('memelpi')->nullable();
            $table->text('namefeeding')->nullable();
            $table->integer('memele')->nullable();
            $table->text('memelep')->nullable();
            $table->text('memelepi')->nullable();


            $table->text('scholar')->nullable();
            $table->text('namescholar')->nullable();
            $table->integer('memtwe')->nullable();
            $table->text('memtwep')->nullable();
            $table->text('memtwepi')->nullable();
            $table->text('scholarname')->nullable();
            $table->integer('memtwel')->nullable();

            $table->text('memtwelp')->nullable();

            $table->text('memtwelpi')->nullable();



            $table->text('sltrp')->nullable();
            $table->text('sltrpname')->nullable();
            $table->integer('memthr')->nullable();
            $table->text('memthrp')->nullable();
            $table->text('memthrpi')->nullable();
            $table->text('namesltrp')->nullable();
            $table->integer('memthri')->nullable();
            $table->text('memthrip')->nullable();
            $table->text('memthripi')->nullable();


            $table->text('credit')->nullable();
            $table->text('namecredit')->nullable();
            $table->integer('memfou')->nullable();
            $table->text('memfoup')->nullable();
            $table->text('memfoupi')->nullable();
            $table->text('creditname')->nullable();
            $table->integer('memfour')->nullable();

            $table->text('memfourp')->nullable();

            $table->text('memfourpi')->nullable();



            $table->text('housing')->nullable();
            $table->text('housingname')->nullable();
            $table->integer('memfi')->nullable();
            $table->text('memfifp')->nullable();
            $table->text('memfifpi')->nullable();
            $table->text('namehousing')->nullable();
            $table->integer('memfif')->nullable();

            $table->text('memfiftp')->nullable();

            $table->text('memfiftpi')->nullable();

            $table->text('programname')->nullable();
            $table->integer('memsix')->nullable();
            $table->text('memsixp')->nullable();
            $table->text('memsixpi')->nullable();
            $table->text('nameprogram')->nullable();
            $table->integer('memsixt')->nullable();
            $table->text('memsixtp')->nullable();
            $table->text('memsixtpi')->nullable();
            $table->text('programoname')->nullable();





            $table->integer('memsixte')->nullable();


            $table->text('memsixtep')->nullable();



            $table->text('memsixtepi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('households');
    }
};
