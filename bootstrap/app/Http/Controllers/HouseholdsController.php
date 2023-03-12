<?php

namespace App\Http\Controllers;

use App\Exports\ExportHouseholds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\SoftDeletes;
use App\Imports\HouseholdsImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Households;

class HouseholdsController extends Controller
{
    public function exports()
    {
        return Excel::download(new ExportHouseholds, 'households.xlsx');
    }
    public function csvexport()
    {
        return Excel::download(new ExportHouseholds, 'households.csv');
    }


    public function imports(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'file'  => 'required|mimes:csv,txt,xls,xlsx|max:10000|',
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            
        } 
        else{
            return redirect()->route('household.index')->with('error', 'Please check the column of your file or the file is empty');
        }

    
        
        Excel::import(new HouseholdsImport, request()->file('file'));
    
    
        return redirect()->route('household.index')
            ->with('success', 'Records imported successfully!');
   
}
    public function index(Request $request)
    {
        $all = Households::get();
        if ($request->has('view_deleted')) {
            $all = Households::onlyTrashed()->get();;
        }
        return view('enumerator.household', compact('all'));
    }
    public function destroy($id)
    {

        $household = Households::find($id)->delete();

        return redirect()->route('household.index')
            ->with('message', 'Household archived successfully.');
    }
    public function restore($id)
    {
        Households::withTrashed()->find($id)->restore();

        return redirect()->route('household.index')->with('success', 'Household restored successfully!');
    }
    public function restore_all()
    {

        if (Households::onlyTrashed()->restore()) {
            return redirect()->route('household.index')->with('success', 'Households restored successfully!');
        }
        // show data
        else {
            return redirect()->route('household.index')->with('error', 'No household have been restored!');
        }
    }
    public function store(Request $request)
    {

        $household = new Households;
        $household->housecontrolnum = request('housecontrolnum');
        $household->headname = request('headname');
        $household->watersupply = request('watersupply');
        $household->waternum = request('waternum');
        $household->toilettype = request('toilettype');
        $household->tenure = request('tenure');
        $household->rentpm = request('rentpm');
        $household->fuel = request('fuel');
        $household->electric = request('electric');
        $household->electricsrc = request('electricsrc');
        $household->generator = request('generator');
        $household->solar = request('solar');
        $household->battery = request('battery');
        $household->electrico = request('electrico');
        $household->landagri = request('landagri');
        $household->landagrinum = request('landagrinum');
        $household->landres = request('landres');
        $household->landcom = request('landcom');
        $household->car = request('car');
        $household->carnum = request('carnum');
        $household->tricycle = request('tricycle');
        $household->trciyclenum = request('trciyclenum');
        $household->bicycle = request('bicycle');
        $household->bicyclenum = request('bicyclenum');
        $household->pedi = request('pedi');
        $household->pedinum = request('pedinum');
        $household->tv = request('tv');
        $household->tvnum = request('tvnum');
        $household->dvd = request('dvd');
        $household->dvdnum = request('dvdnum');
        $household->radio = request('casette');
        $household->radionum = request('casettenum');
        $household->karaoke = request('karaoke');
        $household->karaokenum = request('karaokenum');
        $household->cell = request('cell');
        $household->cellnum = request('cellnum');
        $household->tel = request('tel');
        $household->telnum = request('telnum');
        $household->comp = request('comp');
        $household->compnum = request('compnum');
        $household->fan = request('fan');
        $household->fannum = request('fannum');
        $household->aircon = request('aircon');
        $household->airconum = request('airconum');
        $household->iron = request('iron');
        $household->ironnum = request('ironnum');
        $household->washing = request('washing');
        $household->washingnum = request('washingnum');
        $household->ref = request('ref');
        $household->refnum = request('refnum');
        $household->stove = request('stove');
        $household->stovenum = request('stovenum');
        $household->rice = request('rice');
        $household->ricenum = request('ricenum');
        $household->oven = request('oven');
        $household->ovennum = request('ovennum');
        $household->toaster = request('toaster');
        $household->toasternum = request('toasternum');
        $household->dispenser = request('dispenser');
        $household->dispensernum = request('dispensernum');
        $household->sala = request('sala');
        $household->salanum = request('salanum');
        $household->mats = request('mats');
        $household->matsnum = request('matsnum');
        $household->folding = request('folding');
        $household->foldingnum = request('foldingnum');
        $household->sofa = request('sofa');
        $household->sofanum = request('sofanum');
        $household->othersname = request('othersname');
        $household->othersnum = request('othersnum');
        $household->internet = request('internet');
        $household->house = request('house');
        $household->houseinsurance = request('houseinsurance');
        $household->motor = request('motor');
        $household->motorinsurance = request('motorinsurance');
        $household->app = request('app');
        $household->appinsurance = request('appinsurance');
        $household->gcollection = request('gcollection');
        $household->burn = request('burn');
        $household->compost = request('compost');
        $household->recycle = request('recycle');
        $household->waste = request('waste');
        $household->pitw = request('pitw');
        $household->pitwo = request('pitwo');
        $household->throwing = request('throwing');
        $household->gothers = request('gothers');
        $household->gcollect = request('gcollect');
        $household->gnum = request('gnum');
        $household->crop = request('crop');
        $household->cropcash = request('cropcash');
        $household->cropkind = request('cropkind');
        $household->livestock = request('livestock');
        $household->livecash = request('livecash');
        $household->livekind = request('livekind');
        $household->fishing = request('fishing');
        $household->fishcash = request('fishcash');
        $household->fishkind = request('fishkind');
        $household->forestry = request('forestry');
        $household->forestycash = request('forestycash');
        $household->forestykind = request('forestykind');
        $household->wholesale = request('wholesale');
        $household->wholesalecash = request('wholesalecash');
        $household->wholesale = request('wholesalekind');
        $household->manufacturing = request('manufacturing');
        $household->manucash = request('manucash');
        $household->manukind = request('manukind');
        $household->community = request('community');
        $household->servcash = request('servcash');
        $household->servkind = request('servkind');
        $household->storage = request('storage');
        $household->transpocash = request('transpocash');
        $household->transpokind = request('transpokind');
        $household->mining = request('mining');
        $household->miningcash = request('miningcash');
        $household->miningkind = request('miningkind');
        $household->construct = request('construct');
        $household->constcash = request('constcash');
        $household->constkind = request('constkind');
        $household->elsewhere = request('elsewhere');
        $household->actcash = request('actcash');
        $household->actkind = request('actkind');
        $household->totalnetincomecash = request('totalnetincomecash');
        $household->totalneticomekind = request('totalneticomekind');
        $household->totalsalarykind = request('totalsalarykind');
        $household->totalsalarycash = request('totalsalarycash');
        $household->ofwcash = request('ofwcash');
        $household->ofwkind = request('ofwkind');
        $household->abroadcash = request('abroadcash');
        $household->abroadkind = request('abroadkind');
        $household->domesticcash = request('domesticcash');
        $household->domestickind = request('domestickind');
        $household->pensioncash = request('pensioncash');
        $household->pensionkind = request('pensionkind');
        $household->netsharecash = request('netsharecash');
        $household->netsharekind = request('netsharekind');
        $household->rentalscash = request('rentalscash');
        $household->rentalskind = request('rentalskind');
        $household->interestcash = request('interestcash');
        $household->interestkind = request('interestkind');
        $household->investcash = request('investcash');
        $household->investkind = request('investkind');
        $household->sourcecash = request('sourcecash');
        $household->sourcekind = request('sourcekind');
        $household->totalgrosscash = request('totalgrosscash');
        $household->totalgrosskind = request('totalgrosskind');
        $household->totalimputed = request('totalimputed');
        $household->totalcash = request('totalcash');
        $household->totalkind = request('totalkind');
        $household->totalincome = request('totalincome');
        $household->tenurestatus = request('tenurestatus');
        $household->agrilandnum = request('agrilandnum');
        $household->tempcrops = request('tempcrops');
        $household->tempcropskilo = request('tempcropskilo');
        $household->permacrops = request('permacrops');
        $household->permaccropskilo = request('permaccropskilo');
        $household->tcrops = request('tcrops');
        $household->tcropskilo = request('tcropskilo');
        $household->pcrops = request('pcrops');
        $household->pcropskilo = request('pcropskilo');
        $household->hcrops = request('hcrops');
        $household->hcropskilo = request('hcropskilo');
        $household->beastnum = request('beastnum');
        $household->beastown = request('beastown');
        $household->plownum = request('plownum');
        $household->plowown = request('plowown');
        $household->harrownum = request('harrownum');
        $household->harrowown = request('harrowown');
        $household->mowernum = request('mowernum');
        $household->mowerown = request('mowerown');
        $household->cornnum = request('cornnum');
        $household->cornown = request('cornown');
        $household->spraynum = request('spraynum');
        $household->sprayown = request('sprayown');
        $household->tractornum = request('tractornum');
        $household->tractorown = request('tractorown');
        $household->htractornum = request('htractornum');
        $household->htractorown = request('htractorown');
        $household->turtlenum = request('turtlenum');
        $household->turtleown = request('turtleown');
        $household->planternum = request('planternum');
        $household->planterown = request('planterown');
        $household->dryernum = request('dryernum');
        $household->dryeown = request('dryeown');
        $household->mdrynum = request('mdrynum');
        $household->mdryown = request('mdryown');
        $household->millnum = request('millnum');
        $household->millown = request('millown');
        $household->harvesternum = request('harvesternum');
        $household->harvesterown = request('harvesterown');
        $household->granarynum = request('granarynum');
        $household->granaryown = request('granaryown');
        $household->shednum = request('shednum');
        $household->shedown = request('shedown');
        $household->pumpnum = request('pumpnum');
        $household->pumpown = request('pumpown');
        $household->agriequip = request('agriequip');
        $household->agriequipnum = request('agriequipnum');
        $household->animals = request('animals');
        $household->animalssold = request('animalssold');
        $household->animalsconsume = request('animalsconsume');
        $household->meat = request('meat');
        $household->meatsold = request('meatsold');
        $household->meatconsume = request('meatconsume');
        $household->milk = request('milk');
        $household->milksold = request('milksold');
        $household->milkconsume = request('milkconsume');
        $household->eggs = request('eggs');
        $household->eggsold = request('eggsold');
        $household->eggconsume = request('eggconsume');
        $household->otherlivestock = request('otherlivestock');
        $household->otherlivestocksold = request('otherlivestocksold');
        $household->otherlivestockconsume = request('otherlivestockconsume');
        $household->catching = request('catching');
        $household->culturing = request('culturing');
        $household->fishloc = request('fishloc');
        $household->boatone = request('boatone');
        $household->boatoneown = request('boatoneown');
        $household->boattwo = request('boattwo');
        $household->boattwoown = request('boattwoown');
        $household->boatthree = request('boatthree');
        $household->boathreeown = request('boathreeown');
        $household->boatfour = request('boatfour');
        $household->boatfourown = request('boatfourown');
        $household->boatfive = request('boatfive');
        $household->boatfiveown = request('boatfiveown');
        $household->gearone = request('gearone');
        $household->gearoneown = request('gearoneown');
        $household->geartwo = request('geartwo');
        $household->geartwoown = request('geartwoown');
        $household->gearthree = request('gearthree');
        $household->gearthreeown = request('gearthreeown');
        $household->gearfour = request('gearfour');
        $household->gearfourown = request('gearfourown');
        $household->pond = request('pond');
        $household->fishp = request('fishp');
        $household->fishc = request('fishc');
        $household->seaweed = request('seaweed');
        $household->oyster = request('oyster');
        $household->mussel = request('mussel');
        $household->fisht = request('fisht');
        $household->hatchery = request('hatchery');
        $household->aquaot = request('aquaot');
        $household->fishone = request('fishone');
        $household->fishoneown = request('fishoneown');
        $household->fishtwo = request('fishtwo');
        $household->fishtwoown = request('fishtwoown');
        $household->fishthree = request('fishthree');
        $household->fishthreeown = request('fishthreeown');
        $household->fishfour = request('fishfour');
        $household->fishfourown = request('fishfourown');
        $household->fishfive = request('fishfive');
        $household->fishfiveown = request('fishfiveown');
        $household->livingnum = request('livingnum');
        $household->harvestyrs = request('harvestyrs');
        $household->harvestr = request('harvestr');
        $household->harvestr = request('harvestr');
        $household->samecrop = request('samecrop');
        $household->samecropr = request('samecropr');
        $household->difcrop = request('difcrop');
        $household->difcropr = request('difcropr');
        $household->cropi = request('cropi');
        $household->cropiprov = request('cropiprov');
        $household->agrif = request('agrif');
        $household->agrifprov = request('agrifprov');
        $household->livestocknum = request('livestocknum');
        $household->livestockc = request('livestockc');
        $household->livestockr = request('livestockr');
        $household->livestocki = request('livestocki');
        $household->livestockip = request('livestockip');
        $household->fishyrs = request('fishyrs');
        $household->fishyrsc = request('fishyrsc');
        $household->fishr = request('fishr');
        $household->fishi = request('fishi');
        $household->fiship = request('fiship');
        $household->temp = request('temp');
        $household->brownout = request('brownout');
        $household->sealevel = request('sealevel');
        $household->water = request('water');
        $household->waterr = request('waterr');
        $household->floodt = request('floodt');
        $household->floodhrs = request('floodhrs');
        $household->floodmnths = request('floodmnths');
        $household->drought = request('drought');
        $household->droughtnum = request('droughtnum');
        $household->moveout = request('moveout');
        $household->moveoutr = request('moveoutr');
        $household->evacuate = request('evacuate');
        $household->evacuateloc = request('evacuateloc');
        $household->evacuatenum = request('evacuatenum');
        $household->typhoon = request('typhoon');
        $household->typhoonnum = request('typhoonnum');
        $household->typhoona = request('typhoona');
        $household->typhoonsrc = request('typhoonsrc');
        $household->flood = request('flood');
        $household->floodnum = request('floodnum');
        $household->flooda = request('flooda');
        $household->floodsrc = request('floodsrc');
        $household->drough = request('drough');
        $household->droughtnum = request('droughtnum');
        $household->droughta = request('droughta');
        $household->droughtsrc = request('droughtsrc');
        $household->quakenum = request('quake');
        $household->quakenum = request('quakenum');
        $household->quakea = request('quakea');
        $household->quakesrc = request('quakesrc');
        $household->erupt = request('erupt');
        $household->eruptnum = request('eruptnum');
        $household->erupta = request('erupta');
        $household->eruptsrc = request('eruptsrc');
        $household->landslide = request('landslide');
        $household->landslidenum = request('landslidenum');
        $household->landslinea = request('landslinea');
        $household->landslinesrc = request('landslinesrc');
        $household->tsunami = request('tsunami');
        $household->tsunaminum = request('tsunaminum');
        $household->tsunamia = request('tsunamia');
        $household->tsunamisrc = request('tsunamisrc');
        $household->fire = request('fire');
        $household->firenum = request('firenum');
        $household->firea = request('firea');
        $household->firesrc = request('firesrc');
        $household->forest = request('forest');
        $household->forestnum = request('forestnum');
        $household->foresta = request('foresta');
        $household->forestsrc = request('forestsrc');
        $household->conflict = request('conflict');
        $household->conflictnum = request('conflictnum');
        $household->conflicta = request('conflicta');
        $household->conflictsrc = request('conflictsrc');
        $household->osname = request('osname');
        $household->osnum = request('osnum');
        $household->osa = request('osa');
        $household->osasrc = request('osasrc');
        $household->hungerhappen = request('hungerhappen');
        $household->nhunger = request('nhunger');
        $household->mhunger = request('mhunger');
        $household->nhungers = request('nhungers');
        $household->mhungers = request('mhungers');
        $household->nhungert = request('nhungert');
        $household->mhungert = request('mhungert');
        $household->disasterprepaidnesskit = request('disasterprepaidnesskit');
        $household->watery = request('watery');
        $household->waterynum = request('waterynum');
        $household->food = request('food');
        $household->foodnum = request('foodnum');
        $household->match = request('match');
        $household->matchnum = request('matchnum');
        $household->light = request('light');
        $household->lightnum = request('lightnum');
        $household->radio = request('radio');
        $household->radionum = request('radionum');
        $household->candle = request('candle');
        $household->candlenum = request('candlenum');
        $household->kit = request('kit');
        $household->kitnum = request('kitnum');
        $household->whistle = request('whistle');
        $household->whistlenum = request('whistlenum');
        $household->clothe = request('clothe');
        $household->clothenum = request('clothenum');
        $household->blanket = request('blanket');
        $household->blanketnum = request('blanketnum');
        $household->batt = request('batt');
        $household->battnum = request('battnum');
        $household->docu = request('docu');
        $household->docunum = request('docunum');
        $household->othr = request('othr');
        $household->othrnum = request('othrnum');
        $household->deathhousehold = request('deathhousehold');
        $household->deatho = request('deatho');
        $household->deathosex = request('deathosex');
        $household->deathotime = request('deathotime');
        $household->deathocause = request('deathocause');
        $household->deatht = request('deatht');
        $household->deathtsex = request('deathtsex');
        $household->deathttime = request('deathttime');
        $household->deathtcause = request('deathtcause');
        $household->deathth = request('deathth');
        $household->deaththsex = request('deaththsex');
        $household->deaththtime = request('deaththtime');
        $household->deatthcause = request('deatthcause');
        $household->slp = request('slp');
        $household->slpname = request('slpname');
        $household->memo = request('memo');
        $household->memop = request('memop');
        $household->memoi = request('memoi');
        $household->ffw = request('ffw');
        $household->ffwname = request('ffwname');
        $household->memtw = request('memtw');
        $household->memtwp = request('memtwp');
        $household->memtwpi = request('memtwpi');
        $household->cfw = request('cfw');
        $household->cfwname = request('cfwname');
        $household->memth = request('memth');
        $household->memthp = request('memthp');
        $household->memthpi = request('memthpi');
        $household->pension = request('pension');
        $household->pensionaname = request('pensionaname');
        $household->memf = request('memf');
        $household->memfp = request('memfp');
        $household->memfpi = request('memfpi');
        $household->ppp = request('ppp');
        $household->pppname = request('pppname');
        $household->memfiv = request('memfiv');
        $household->memfip = request('memfip');
        $household->memfipi = request('memfipi');
        $household->arcdp = request('arcdp');
        $household->arcdpname = request('arcdpname');
        $household->mems = request('mems');
        $household->memsp = request('memsp');
        $household->memspi = request('memspi');
        $household->twsp = request('twsp');
        $household->twspname = request('twspname');
        $household->memse = request('memse');
        $household->memsep = request('memsep');
        $household->memsepi = request('memsepi');
        $household->cbep = request('cbep');
        $household->cbepname = request('cbepname');
        $household->meme = request('meme');
        $household->memep = request('memep');
        $household->memepi = request('memepi');
        $household->ohi = request('ohi');
        $household->ohiname = request('ohiname');
        $household->memn = request('memn');
        $household->memnp = request('memnp');
        $household->memnpi = request('memnpi');
        $household->othi = request('othi');
        $household->memnt = request('memnt');
        $household->memntp = request('memntp');
        $household->memntpi = request('memntpi');
        $household->health = request('health');
        $household->healthname = request('healthname');
        $household->memte = request('memte');
        $household->memtep = request('memtep');
        $household->memtepi = request('memtepi');
        $household->namehealth = request('namehealth');
        $household->memten = request('memten');
        $household->memtenp = request('memtenp');
        $household->memtenpi = request('memtenpi');
        $household->feeding = request('feeding');
        $household->feedingname = request('feedingname');
        $household->memel = request('memel');
        $household->memelp = request('memelp');
        $household->memelpi = request('memelpi');
        $household->namefeeding = request('namefeeding');
        $household->memele = request('memele');
        $household->memelep = request('memelep');
        $household->memelepi = request('memelepi');
        $household->scholar = request('scholar');
        $household->namescholar = request('namescholar');
        $household->memtwe = request('memtwe');
        $household->memtwep = request('memtwep');
        $household->memtwepi = request('memtwepi');
        $household->scholarname = request('scholarname');
        $household->memtwel = request('memtwel');
        $household->memtwelp = request('memtwelp');
        $household->memtwelpi = request('memtwelpi');
        $household->sltrp = request('sltrp');
        $household->sltrpname = request('sltrpname');
        $household->memthr = request('memthr');
        $household->memthrp = request('memthrp');
        $household->memthrpi = request('memthrpi');
        $household->namesltrp = request('namesltrp');
        $household->memthri = request('memthri');
        $household->memthrip = request('memthrip');
        $household->memthripi = request('memthripi');
        $household->credit = request('credit');
        $household->namecredit = request('namecredit');
        $household->memfou = request('memfou');
        $household->memfoup = request('memfoup');
        $household->memfoupi = request('memfoupi');
        $household->creditname = request('creditname');
        $household->memfour = request('memfour');
        $household->memfourp = request('memfourp');
        $household->memfourpi = request('memfourpi');
        $household->housing = request('housing');
        $household->housingname = request('housingname');
        $household->memfi = request('memfi');
        $household->memfifp = request('memfifp');
        $household->memfifpi = request('memfifpi');
        $household->namehousing = request('namehousing');
        $household->memfif = request('memfif');
        $household->memfiftp = request('memfiftp');
        $household->memfiftpi = request('memfiftpi');
        $household->programname = request('programname');
        $household->memsix = request('memsix');
        $household->memsixp = request('memsixp');
        $household->memsixpi = request('memsixpi');
        $household->nameprogram = request('nameprogram');
        $household->memsixt = request('memsixt');
        $household->memsixtp = request('memsixtp');
        $household->memsixtpi = request('memsixtpi');
        $household->programoname = request('programoname');
        $household->memsixte = request('memsixte');
        $household->memsixtep = request('memsixtep');
        $household->memsixtepi = request('memsixtepi');

        $household->save();
        return redirect('/household')->with('success', 'Household added successfully!');
    }
    public function update(Request $request, Households $household)
    {
        $household->update($request->all());
        return redirect('/household')->with('success', 'Household updated successfully!');
    }
}
