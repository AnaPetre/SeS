<body>
  <input type="button" onclick="CreateTableFromJSON()" value="Display patients information" />
  <p id="showData"></p>
  
</body>

<script>
  function CreateTableFromJSON() {
    var myData = [
   {
      "id":1,
      "first_name":"Belinda",
      "last_name":"Newiss",
      "email":"bnewiss0@wisc.edu",
      "gender":"Female",
      "diagnosis_code":"M84454A",
      "diagnosis_description":"Immobilization of Left Finger using Splint",
      "diagnosis_description_detailed":"Levetiracetam",
      "administered_drug_treatment":"ACONITUM NAPELLUS ROOT",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":2,
      "first_name":"Elwyn",
      "last_name":"Styant",
      "email":"estyant1@joomla.org",
      "gender":"Male",
      "diagnosis_code":"T1510XD",
      "diagnosis_description":"Fusion of R Sternoclav Jt with Int Fix, Open Approach",
      "diagnosis_description_detailed":"ondansetron hydrochloride",
      "administered_drug_treatment":"Acetaminophen and Diphenhydramine HCl",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":3,
      "first_name":"Karita",
      "last_name":"Casella",
      "email":"kcasella2@yahoo.com",
      "gender":"Female",
      "diagnosis_code":"S49199D",
      "diagnosis_description":"Dilate 4+ Cor Art, Bifurc, w 4+ Intralum Dev, Open",
      "diagnosis_description_detailed":"Ondansetron",
      "administered_drug_treatment":"ALOE VERA FLOWER",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":4,
      "first_name":"Yvonne",
      "last_name":"Shallcrass",
      "email":"yshallcrass3@mozilla.com",
      "gender":"Female",
      "diagnosis_code":"R5601",
      "diagnosis_description":"Introduction of Analg/Hypnot/Sedat into Lymph, Perc Approach",
      "diagnosis_description_detailed":"NAPROXEN SODIUM",
      "administered_drug_treatment":"Hydrocodone Bitartrate And Acetaminophen",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":5,
      "first_name":"Jodee",
      "last_name":"Silcocks",
      "email":"jsilcocks4@livejournal.com",
      "gender":"Female",
      "diagnosis_code":"S49029D",
      "diagnosis_description":"Bypass L Great Saphenous to Low Vein w Autol Vn, Open",
      "diagnosis_description_detailed":"Bismuth subsalicylate",
      "administered_drug_treatment":"Aluminum Zirconium Trichlorohydrex Gly",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":6,
      "first_name":"Durante",
      "last_name":"Allsebrook",
      "email":"dallsebrook5@phpbb.com",
      "gender":"Male",
      "diagnosis_code":"S0121XA",
      "diagnosis_description":"Replace of R Com Carotid with Synth Sub, Perc Endo Approach",
      "diagnosis_description_detailed":"Bumetanide",
      "administered_drug_treatment":"fenofibrate",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":7,
      "first_name":"Cy",
      "last_name":"Gillanders",
      "email":"cgillanders6@purevolume.com",
      "gender":"Male",
      "diagnosis_code":"M7502",
      "diagnosis_description":"Insert of Radioact Elem into L Shoulder, Perc Endo Approach",
      "diagnosis_description_detailed":"octinoxate, octocrylene, oxybenzone, zinc oxide",
      "administered_drug_treatment":"Codeine Phosphate, Phenylephrine Hydrochloride",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":8,
      "first_name":"Lynnett",
      "last_name":"Purdey",
      "email":"lpurdey7@telegraph.co.uk",
      "gender":"Female",
      "diagnosis_code":"M90551",
      "diagnosis_description":"Reposition Left Lung, Open Approach",
      "diagnosis_description_detailed":"DICAPRYLYL CARBONATE",
      "administered_drug_treatment":"CELECOXIB",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":9,
      "first_name":"Lennie",
      "last_name":"McGonigle",
      "email":"lmcgonigle8@irs.gov",
      "gender":"Male",
      "diagnosis_code":"T83128",
      "diagnosis_description":"Muscle Performance Assessment of Neuro Head, Neck",
      "diagnosis_description_detailed":"Arnica montana, Calendula officinalis, Symphytum officinale, Hypericum perforatum, Belladonna, Bellis perennis, Carbo vegetabilis,",
      "administered_drug_treatment":"triptorelin pamoate",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":10,
      "first_name":"Genny",
      "last_name":"D'Elias",
      "email":"gdelias9@amazon.co.jp",
      "gender":"Female",
      "diagnosis_code":"S8010XA",
      "diagnosis_description":"Measure Cardiac Electr Activity, Guidance, Extern",
      "diagnosis_description_detailed":"Levothyroxine Sodium",
      "administered_drug_treatment":"Ibuprofen",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":11,
      "first_name":"Marjy",
      "last_name":"Brownett",
      "email":"mbrownetta@irs.gov",
      "gender":"Female",
      "diagnosis_code":"S93303",
      "diagnosis_description":"Compression of L Low Extrem using Intermit Pressure Dev",
      "diagnosis_description_detailed":"Anthracinum,",
      "administered_drug_treatment":"Lidocaine Hydrochloride",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":12,
      "first_name":"Livy",
      "last_name":"Vidloc",
      "email":"lvidlocb@tmall.com",
      "gender":"Female",
      "diagnosis_code":"M86079",
      "diagnosis_description":"Restriction of L Axilla Art with Extralum Dev, Perc Approach",
      "diagnosis_description_detailed":"Elaeagnus angustifolia",
      "administered_drug_treatment":"risperidone",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":13,
      "first_name":"Faythe",
      "last_name":"Eldrett",
      "email":"feldrettc@time.com",
      "gender":"Female",
      "diagnosis_code":"T2212",
      "diagnosis_description":"Bypass R Popl Art to Poplit Art w Nonaut Sub, Open",
      "diagnosis_description_detailed":"Butalbital, Acetaminophen, and Caffeine",
      "administered_drug_treatment":"Lamotrigine",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":14,
      "first_name":"Rayner",
      "last_name":"Tanti",
      "email":"rtantid@archive.org",
      "gender":"Male",
      "diagnosis_code":"V00158S",
      "diagnosis_description":"Release Right Hip Tendon, External Approach",
      "diagnosis_description_detailed":"Avobenzone, Homosalate, Octisalate, Octocrylene, and Oxybenzone",
      "administered_drug_treatment":"Chlorhexidine Gluconate",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":15,
      "first_name":"Boothe",
      "last_name":"Girodier",
      "email":"bgirodiere@timesonline.co.uk",
      "gender":"Male",
      "diagnosis_code":"S02651G",
      "diagnosis_description":"Replacement of L Kidney Pelvis with Synth Sub, Via Opening",
      "diagnosis_description_detailed":"Calcium polycarbophil",
      "administered_drug_treatment":"Lansoprazole",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":16,
      "first_name":"Felic",
      "last_name":"Fitzmaurice",
      "email":"ffitzmauricef@altervista.org",
      "gender":"Male",
      "diagnosis_code":"M00011",
      "diagnosis_description":"Removal of Autol Sub from R Patella, Perc Approach",
      "diagnosis_description_detailed":"rhubarb",
      "administered_drug_treatment":"OCTINOXATE, OCTOCRYLENE, and ZINC OXIDE",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":17,
      "first_name":"Tabbatha",
      "last_name":"Matschke",
      "email":"tmatschkeg@imgur.com",
      "gender":"Female",
      "diagnosis_code":"O88212",
      "diagnosis_description":"Removal of Drainage Device from Bladder, Endo",
      "diagnosis_description_detailed":"Salicylic Acid",
      "administered_drug_treatment":"Atomoxetine hydrochloride",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":18,
      "first_name":"Yalonda",
      "last_name":"Taphouse",
      "email":"ytaphouseh@csmonitor.com",
      "gender":"Female",
      "diagnosis_code":"T472X1A",
      "diagnosis_description":"Revision of Nonaut Sub in L Tarsal Jt, Extern Approach",
      "diagnosis_description_detailed":"didanosine",
      "administered_drug_treatment":"Methyl Salicylate, Menthol and Capsaicin",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":19,
      "first_name":"Adan",
      "last_name":"Beddon",
      "email":"abeddoni@webeden.co.uk",
      "gender":"Male",
      "diagnosis_code":"S0292XG",
      "diagnosis_description":"Extirpation of Matter from L Metacarpophal Jt, Perc Approach",
      "diagnosis_description_detailed":"Standardized Cat Pelt",
      "administered_drug_treatment":"ALUMINUM HYDROXIDE, MAGNESIUM HYDROXIDE, DIMETHICONE",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   },
   {
      "id":20,
      "first_name":"Charis",
      "last_name":"Caff",
      "email":"ccaffj@vkontakte.ru",
      "gender":"Female",
      "diagnosis_code":"S82046G",
      "diagnosis_description":"Repair Right Carpal, External Approach",
      "diagnosis_description_detailed":"Bisacodyl",
      "administered_drug_treatment":"ziprasidone hydrochloride",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   }
]

    let displayColumns = ['id', 'first_name', 'last_name', 'details'];

     myData = myData.map(x => {
      let newObj = {};
      for (col of displayColumns) {
        newObj[col] = x[col];
      }
      return newObj;
    });

    var col = [];
    for (var i = 0; i < myData.length; i++) {
      for (var key in myData[i]) {
        if (col.indexOf(key) === -1) {
          col.push(key);
        }
      }
    }

    var table = document.createElement("table");
    var tr = table.insertRow(-1); 
    for (var i = 0; i < col.length; i++) {
      var th = document.createElement("th"); 
      th.innerHTML = col[i];
      tr.appendChild(th);
    }
    
    for (var i = 0; i < myData.length; i++) {
      tr = table.insertRow(-1);
      for (var j = 0; j < col.length; j++) {
        var tabCell = tr.insertCell(-1);
        tabCell.innerHTML = myData[i][col[j]];
      }
    }
    
    var divContainer = document.getElementById("showData");
    divContainer.innerHTML = "";
    divContainer.appendChild(table);
  }
  
 
</script>

<script>
function details() {
  var txt = [
  {
      "id":1,
      "first_name":"Belinda",
      "last_name":"Newiss",
      "email":"bnewiss0@wisc.edu",
      "gender":"Female",
      "diagnosis_code":"M84454A",
      "diagnosis_description":"Immobilization of Left Finger using Splint",
      "diagnosis_description_detailed":"Levetiracetam",
      "administered_drug_treatment":"ACONITUM NAPELLUS ROOT",
	  "details": "<input type='button' onclick='details()' value='Show more information' />"
   }
  ]
  
  
  
  if (confirm("bnewiss0@wisc.edu, Female, M84454A, Immobilization of Left Finger using Splint, Levetiracetam, ACONITUM NAPELLUS ROOT")) {
	
  } 

}
</script>