<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function setSession()
    {
        session(['key' => 'value']);
        return ['a' => 'x'];
    }

    public function getSession()
    {
        $value = session('key');
        return ['a' => $value];
    }
    public function upload(Request $request)
    {
        $path = $request->file('file')->store('file');

        return ['url' =>  asset('storage/'.$path)];
    }

    public function python(Request $request)
    {
        if ($request->method() == 'GET') {
            $response = Curl::to('http://192.168.1.102:8880'.$request->get('r'))
                ->get();
        } else {
            $response = Curl::to('http://192.168.1.102:8880'.$request->get('r'))
                ->post();
        }
        return $response;
    }

    public function test($any, Request $request)
    {
        var_dump($any);
        $response = Curl::to('http://127.0.0.1:3000/'.$any)
            ->get();
        return $response;
        return '';
    }

    public function testIndex(Request $request)
    {
        $response = Curl::to('http://127.0.0.1:3000'.$request->get('r'))
            ->get();
        return $response;
    }

    public function sampleDocument(Request $request)
    {
        $string = '{"language":"de","style":{"theme":"Elegant","color":"Greyblue","pageNumbers":true},"coverletter":{"sender":"Max Muster\nMusterstra\u00dfe 1\n12345 Musterstadt\n0123 \/ 456 789\nemail@domain.de","recipient":"**Musterfirma GmbH**\nz.Hd. Frau Musterfrau\nMusterstra\u00dfe 1\n12345 Musterstadt","date":"9. November 2016","subject":"Bewerbung auf die Stelle als Mustermitarbeiter","paragraphs":[{"category":"salutation","sentences":[{"category":"salutation","text":"Sehr geehrte Damen und Herren, "}]},{"category":"preface","sentences":[{"category":"reference","text":"mit gro\u00dfem Interesse bin ich ${preface.source:im XING Stellenmarkt} auf die ausgeschriebene Position aufmerksam geworden. "},{"category":"joboffer","text":"Aus diesem Grund bewerbe ich mich bei Ihnen als ${preface.vacancyEmployment:Musterstelle (m\/w)} in Festanstellung. "}]},{"category":"introduction","sentences":[{"category":"currentSituation","text":"Zurzeit arbeite ich als ${introduction.jobName:Musterberuf} bei ${introduction.jobCompanyName:Musterfirma}. "},{"category":"previousTasks","text":"Zu meinen wichtigsten Aufgaben geh\u00f6ren hierbei ${introduction.previousTasks:die Einarbeitung in neue Produkte, die Durchf\u00fchrung von Verkaufsgespr\u00e4chen und die Erstellung und Weitergabe von Bestellungen}. "}]},{"category":"motivation","sentences":[{"category":"motive","text":"Ihr Stellenangebot h\u00f6rt sich toll an! Ich hoffe, mir hierdurch pers\u00f6nliche und fachliche Entwicklungsm\u00f6glichkeiten erschlie\u00dfen zu k\u00f6nnen. "},{"category":"interest","text":"Ihre Ausrichtung und das Image in dieser Branche gefallen mir besonders gut, daher sehe ich Sie als einen sehr interessanten Arbeitgeber an. "},{"category":"reason","text":"In den Medien habe ich Ihre Entwicklung schon lange verfolgt und glaube daher, auch gut ins Unternehmen zu passen. "}]},{"category":"strengths","sentences":[{"category":"operational","text":"In eine neue Aufgabe bei Ihnen kann ich verschiedene St\u00e4rken einbringen. So bin ich meine Aufgaben sehr ${strengths.operational:zuverl\u00e4ssig, verantwortungsbewusst und pr\u00e4zise} angegangen. "},{"category":"personal","text":"Mit mir gewinnt Ihr Unternehmen einen Mitarbeiter, der ${strengths.personal:flexibel, motiviert und teamorientiert} ist. "},{"category":"professional","text":"Au\u00dferdem habe ich in fr\u00fcheren Projekten insbesondere ${strengths.professional:ausgepr\u00e4gte Kommunikationsst\u00e4rke, hohe Lernbereitschaft und viel Kreativit\u00e4t} unter Beweis stellen k\u00f6nnen. "}]},{"category":"closing","sentences":[{"category":"transition","text":"Konnte ich Sie mit dieser Bewerbung \u00fcberzeugen? "},{"category":"availability","text":"Ich bin f\u00fcr einen Einstieg zum n\u00e4chstm\u00f6glichen Zeitpunkt verf\u00fcgbar. "},{"category":"nextSteps","text":"Einen vertiefenden Eindruck gebe ich Ihnen gerne in einem pers\u00f6nlichen Gespr\u00e4ch. Ich freue mich \u00fcber Ihre Einladung! "}]},{"category":"farewell","sentences":[{"category":"farewell","text":"Mit freundlichen Gr\u00fc\u00dfen "}]}],"signature":{"text":"!Max Muster, Musterstadt den 29.10.2016","color":"#567995","hidden":false},"layout":[[["sender","recipient","date","subject"]],[["paragraph[0]","paragraph[1]","paragraph[2]","paragraph[3]","paragraph[4]","paragraph[5]","paragraph[6]"]],[["signature"]]]},"cv":{"title":"!Max Muster","paragraphs":[{"type":"personal-data","model":"PersonalDataParagraph","heading":"!Pers\u00f6nliche Daten","lines":[{"field":"!Name","value":"!Max Muster"},{"field":"!Anschrift","value":"!Musterstra\u00dfe 1\n12345 Musterstadt"},{"field":"!Tel.","value":"!0123 \/ 456 789"},{"field":"!E-Mail","value":"!email@domain.de"},{"field":"!geb.","value":"!01.01.1970 in Musterstadt"}]},{"type":"education","model":"EducationParagraph","heading":"!Ausbildung","lines":[{"date":"!2003 \u2013 2006","institution":"!Musterstudium an der Musteruniversit\u00e4t","description":"!Abschluss: Beispiel-Abschluss","isDescriptionHidden":false},{"date":"!1994 \u2013 2003","institution":"!Musterschule","description":"!Abschluss: Beispiel-Abschluss","isDescriptionHidden":false}]},{"type":"skills","model":"SkillParagraph","heading":"!Kenntnisse & F\u00e4higkeiten","lines":[{"field":"!Fremdsprachen","value":"!Englisch sehr gut in Wort und Schrift\nFranz\u00f6sisch ausbauf\u00e4hig in Wort und Schrift"},{"field":"!PC-Kenntnisse","value":"!Microsoft Office (Word, Excel)\n10-Finger-Schreiben\nAdobe Photoshop"},{"field":"!F\u00fchrerschein","value":"!Klasse B"}]},{"type":"working-experience","model":"WorkExperienceParagraph","heading":"!Berufliche Laufbahn","lines":[{"date":"!Mai 2011 \u2013 heute","company":"!Musterfirma","position":"!Senior Projektmanager","isPositionHidden":false},{"date":"!Januar 2009 \u2013 M\u00e4rz 2011","company":"!Musterfirma","position":"!Projektmanager\n\u25cf\u2002Professionalisierung der Abl\u00e4ufe\n\u25cf\u2002Einf\u00fchrung von Prozessen","isPositionHidden":false},{"date":"!Februar 2007 \u2013 Dezember 2008","company":"!Musterfirma","position":"!Projektmanager\n\u25cf\u2002Kundendialog\n\u25cf\u2002Schnittstelle zw. Technik und Kunden","isPositionHidden":false},{"date":"!August 2006 \u2013 Februar 2007","company":"!Musterfirma","position":"!Praktikum im Muster-Bereich\n\u25cf\u2002Datenerfassung\n\u25cf\u2002Administrative T\u00e4tigkeiten","isPositionHidden":false},{"date":"!M\u00e4rz 2001","company":"!Musterfirma","position":"!Sch\u00fclerpraktikum im Muster-Bereich","isPositionHidden":false}]}],"signature":{"text":"!Max Muster, Musterstadt den Jan 19, 2017","color":"#567995","hidden":true},"layout":[[["title"]],[["personal-data","education","skills"],["working-experience"]],[["signature"]]]}}';
        return json_decode($string, true);
    }
    public function auth(Request $request)
    {
        $string = '{"lastEditedDocumentId":"7cd3c4c65d5b3eec10646f5cb60f3a6e","isAuthenticated":false}';
        return json_decode($string, true);
    }
}
