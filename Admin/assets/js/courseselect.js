function ChangeEve()
{
var qual = document.getElementById('course').value;
//var cours = document.getElementById('course').value;
if(qual === "UG")
{
	//alert(qual);
	branch.options.length=0;
	var opt = document.createElement("option"); opt.text = ' MBBS'; opt.value = 'MBBS'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' BDS'; opt.value = 'BDS'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' BAMS'; opt.value = 'BAMS'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' BPTH'; opt.value = 'BPTH'; branch.options.add(opt);
}

if(qual === "PG")
{
	//alert(qual);
	branch.options.length=0;
	var opt = document.createElement("option"); opt.text = ' Diploma in Radio-Diagnosis'; opt.value = 'Diploma in Radio-Diagnosis'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Child Health'; opt.value = 'Diploma in Child Health'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Obstetrics & Gynaecology'; opt.value = 'Diploma in Obstetrics & Gynaecology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Dermatology, Venereology and Leprosy'; opt.value = 'Diploma in Dermatology, Venereology and Leprosy'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' Diploma in Orthopaedics'; opt.value = 'Diploma in Orthopaedics'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Anesthesia'; opt.value = 'Diploma in Anesthesia'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Tuberculosis & Chest Diseases'; opt.value = 'Diploma in Tuberculosis & Chest Diseases'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Ophthalmology'; opt.value = 'Diploma in Ophthalmology'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' Diploma in Oto-Rhino-Laryngology'; opt.value = 'Diploma in Oto-Rhino-Laryngology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Clinical Pathology'; opt.value = 'Diploma in Clinical Pathology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Forensic Medicine'; opt.value = 'Diploma in Forensic Medicine'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Psychological Medicine'; opt.value = 'Diploma in Psychological Medicine'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' Diploma in Physical Medicine & Rehabilitation'; opt.value = 'Diploma in Physical Medicine & Rehabilitation'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Radio Therapy'; opt.value = 'Diploma in Radio Therapy'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Pharmacology'; opt.value = 'Diploma in Pharmacology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Community Medicine'; opt.value = 'Diploma in Community Medicine'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' Diploma in Leprosy'; opt.value = 'Diploma in Leprosy'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Microbiology'; opt.value = 'Diploma in Microbiology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Public Health'; opt.value = 'Diploma in Public Health'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' Diploma in Sports Medicine'; opt.value = 'Diploma in Sports Medicine'; branch.options.add(opt);
         
}


if(qual === "MD / MS")
{
	//alert(qual);
	branch.options.length=0;
	var opt = document.createElement("option"); opt.text = ' MD - Radio Radiology'; opt.value = 'MD - Radio Radiology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MS – Orthopaedics'; opt.value = 'MS – Orthopaedics'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Paediatrics'; opt.value = 'MD – Paediatrics'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD - Obstetrtics & Gynaecology'; opt.value = 'MD - Obstetrtics & Gynaecology'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' MD - General Medicine'; opt.value = 'MD - General Medicine'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD - Dermatology, Venereology & Leprosy'; opt.value = 'MD - Dermatology, Venereology & Leprosy'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MS – Ophthalmology'; opt.value = 'MS – Ophthalmology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Psychiatry'; opt.value = 'MD – Psychiatry'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' MS – ENT'; opt.value = 'MS – ENT'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Anaesthesiology'; opt.value = 'MD – Anaesthesiology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD - Tuberculosis & Respiratory Diseases'; opt.value = 'MD - Tuberculosis & Respiratory Diseases'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Radiothrapy'; opt.value = 'MD – Radiothrapy'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' MD – Pharmacology'; opt.value = 'MD – Pharmacology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Pathology'; opt.value = 'MD – Pathology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD - Social & Preventive Medicine / Community Medicine'; opt.value = 'MD - Social & Preventive Medicine / Community Medicine'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Physiology'; opt.value = 'MD – Physiology'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' MD - Bio-Chemistry'; opt.value = 'MD - Bio-Chemistry'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD – Microbiology'; opt.value = 'MD – Microbiology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' MD - Physical Medicine & Rehabilitation'; opt.value = 'MD - Physical Medicine & Rehabilitation'; branch.options.add(opt);
	
}
if(qual === "Super Speciality")
{
	//alert(qual);
	branch.options.length=0;
	var opt = document.createElement("option"); opt.text = ' DM - Cardiology'; opt.value = 'DM - Cardiology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' DM - Endocrinology'; opt.value = 'DM - Endocrinology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' DM - Gastroenterology'; opt.value = 'DM - Gastroenterology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' DM - Nephrology'; opt.value = 'DM - Nephrology'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' DM - Neurology'; opt.value = 'DM - Neurology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' M.Ch - Cardio Thoracic and Vascular Surgery'; opt.value = 'M.Ch - Cardio Thoracic and Vascular Surgery'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' M.Ch - Neuro Surgery'; opt.value = 'M.Ch - Neuro Surgery'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' M.Ch - Paediatric Surgery'; opt.value = 'M.Ch - Paediatric Surgery'; branch.options.add(opt);
        var opt = document.createElement("option"); opt.text = ' M.Ch - Plastic Surgery '; opt.value = 'M.Ch - Plastic Surgery '; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' M.Ch - Surgical Gastroenterology'; opt.value = 'M.Ch - Surgical Gastroenterology'; branch.options.add(opt);
	var opt = document.createElement("option"); opt.text = ' M.Ch - Urology'; opt.value = 'M.Ch - Urology'; branch.options.add(opt);
	 
}
//
}
