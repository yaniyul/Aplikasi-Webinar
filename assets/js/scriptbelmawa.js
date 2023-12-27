	const selectBelmawa = document.getElementById('nama_belmawa');
	const belmawaIdElement = document.getElementById('id_belmawa');

	function showBelmawaId() {
		const selectedBelmawa = selectBelmawa.value;
		const belmawaIds = {
			NUDC 		: 'Bel-01',
			KMI 		: 'Bel-02',
			FFMI 		: 'Bel-03',
			KBMI 		: 'Bel-04',
			KDMI 		: 'Bel-05',
			MIPA PT 	: 'Bel-06',
			KRI 		: 'Bel-07',
			KRTI 		: 'Bel-08',
			LIDM 		: 'Bel-09',
			MTQMN		: 'Bel-10',
			GEMASTIK 	: 'Bel-11',
			PIMNAS 		: 'Bel-12',
			POMNAS 		: 'Bel-13',
			PEKSIMINAS 	: 'Bel-14',
			PILMAPRES 	: 'Bel-15',
			PKM 		: 'Bel-16',
			StartupMahasiswaIndonesia : 'Bel-17',
		};
		belmawaIdElement.textContent= belmawaIds[selectedBelmawa];
		//belmawaIdElement.value = spanValue();
	}
	selectBelmawa.addEventListener('change', showBelmawaId);
	//copySpanValueToInput();
