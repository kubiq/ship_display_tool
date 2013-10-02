<?php




class shipstats
{
	var $sAm = 0;
	var $sEmr = 0;
	var $sThr = 0;
	var $sKir = 0;
	var $sExr = 0;
	var $sRe = 0;
	var $aAm = 0;
	var $aEmr = 0;
	var $aThr = 0;
	var $aKir = 0;
	var $aExr = 0;
	var $hAm = 0;
	var $hEmr = 0;
	var $hThr = 0;
	var $hKir = 0;
	var $hExr = 0;
	var $cAm = 0;
	var $cRe = 0;
	var $oSp = 0;
	var $oSe = 0;
	var $oTy = "";
	var $oTa = 0;
	var $oDi = 0;
	var $oSc = 0;
	var $oSi = 0;
	var $oMa = 0;
	var $rSize = 0;
	var $shipSlots = 0;


	var $effectiveShield = 0;
	var $effectiveArmor = 0;
	var $effectiveHull = 0;
	var $effectiveHp = 0;

	var $tankAmount = 0;
	var $tankType = "";

	var $capRechargeRate = 0;
	var $capStatus = 0;
	var $capStable = 0;

	var $pilotName = "";
	var $pilotCorp = "";
	var $pilotAlliance = "";
	var $pilotShip = "";
	var $pilotLoc = "";
	var $pilotLocReg = "";
	var $pilotLocSec = "";
	var $pilotDate = "";
	var $pilotDam = "";
	var $pilotCos = "";
	var $pilotShipClass = "";

	var $pilotPort = "";
	var $pilotNameURL = "";
	var $pilotCorpURL = "";
	var $pilotAllianceURL = "";
	var $pilotShipURL = "";
	var $pilotLocURL = "";

	var $shipIcon = "";

	var $shipDesc = "";
	var $shipEffects;

	var $isMWD;
	var $mwdBoost = 0;
	var $mwdSig = 0;
	var $mwdThrust = 0;
	var $mwdMass = 0;
	var $mwdSigRed = 0;

	var $isAB;
	var $abBoost = 0;
	var $abThrust = 0;
	var $abMass = 0;

	var $abT3Boost = 0;
	var $mwdT3Boost = 0;
	var $mwdT3Sig = 0;
	var $mwdT3Cap = 0;

	var $capInj;

	var $capGJ;

	var $damageMod;
	var $damageGun;
	var $damage;
	var $volley;
	var $damageModules;
	var $droneDamage;
	var $droneDamageMod;

	var $transCap;
	var $transCapEff;

	var $senBoost;

	var $sigRadiusBoost;

	var $tankTypeofship;
	var $tankBoost;
	var $tankAmpShield;
	var $tankAmpArmor;

	var $shipResists;


	var $droneDPS;
	var $missileDPS;
	var $turretDPS;

	var $warpSpeed;

	var $corpPort;
	var $alliPort;

	var $cal_amount;
	var $cal_used;

	var $cpu_amount;
	var $cpu_used;

	var $prg_amount;
	var $prg_used;

	var $tur_amount;
	var $tur_used;

	var $mis_amount;
	var $mis_used;

	function shipstats(){



		$this->sAm = null;
		$this->sEmr = 0;
		$this->sThr = 0;
		$this->sKir = 0;
		$this->sExr = 0;
		$this->sRe = 0;
		$this->aAm = 0;
		$this->aEmr = 0;
		$this->aThr = 0;
		$this->aKir = 0;
		$this->aExr = 0;
		$this->hAm = 0;
		$this->hEmr = 0;
		$this->hThr = 0;
		$this->hKir = 0;
		$this->hExr = 0;
		$this->cAm = 0;
		$this->cRe = 0;
		$this->oSp = 0;
		$this->oSe = 0;
		$this->oTy = "";
		$this->oTa = 0;
		$this->oDi = 0;
		$this->oSc = 0;
		$this->oSi = 0;
		$this->oMa = 0;
		$this->rSize = 0;

		$this->shipSlots = [];

		$this->effectiveShield = 0;
		$this->effectiveArmor = 0;
		$this->effectiveHull = 0;
		$this->effectiveHp = 0;

		$this->tankAmount = 0;
		$this->tankHull = "";

		$this->capRechargeRate = 0;
		$this->capStatus = 0;
		$this->capStable = 0;

		$this->pilotName = "";
		$this->pilotCorp = "";
		$this->pilotAlliance = "";
		$this->pilotShip = "";
		$this->pilotLoc = "";
		$this->pilotLocReg = "";
		$this->pilotLocSec = "";
		$this->pilotDate = "";
		$this->pilotDam = "";
		$this->pilotCos = "";
		$this->pilotShipClass = "";

		$this->pilotPort = "";
		$this->pilotNameURL = "";
		$this->pilotCorpURL = "";
		$this->pilotAllianceURL = "";
		$this->pilotShipURL = "";
		$this->pilotLocURL = "";

		$this->corpPort = "";
		$this->alliPort = "";

		$this->shipIcon = "";

		$this->shipDesc = "";
		$this->shipEffects = [];


		$this->isMWD = "";
		$this->mwdBoost = 0;
		$this->mwdSig = 0;
		$this->mwdThrust = 0;
		$this->mwdMass = 0;
		$this->mwdSigRed = 0;

		$this->isAB = "";
		$this->abBoost = 0;
		$this->abThrust = 0;
		$this->abMass = 0;

		$this->abT3Boost = 0;
		$this->mwdT3Boost = 0;
		$this->mwdT3Sig = 0;
		$this->mwdT3Cap = 0;

		$this->capInj = [];

		$this->capGJ = [];

		$this->damageMod = [];
		$this->damageGun = [];
		$this->damage = [];
		$this->volley = [];
		$this->damageModules = [];
		$this->droneDamage = [];
		$this->droneDamageMod = [];

		$this->transCap = [];
		$this->transCapEff = [];

		$this->senBoost = [];

		$this->sigRadiusBoost = [];

		$this->tankofship = "pass";
		$this->tankBoost = [];
		$this->tankAmpShield = [];
		$this->tankAmpArmor = [];

		$this->shipResists = [];

		$this->droneDPS = 0;
		$this->missileDPS = 0;
		$this->turretDPS = 0;
		$this->warpSpeed = 0;


		$this->cal_amount = 0;
		$this->cal_used = 0;



		$this->cpu_amount = 0;
		$this->cpu_used = [];

		$this->prg_amount = 0;
		$this->prg_used = [];

		$this->tur_amount = 0;
		$this->tur_used = 0;

		$this->mis_amount = 0;
		$this->mis_used = 0;

	}


	function getShieldAmount() {
		return $this->sAm;
	}

	function setShieldAmount($input) {
		$this->sAm = $input;
	}

	function getArmorAmount() {
		return $this->aAm;
	}

	function setArmorAmount($input) {
		$this->aAm = $input;
	}

	function getHullAmount() {
		return $this->hAm;
	}

	function setHullAmount($input) {
		$this->hAm = $input;
	}

	function getSensorAmount() {
		return $this->oSe;
	}

	function setSensorAmount($input) {
		$this->oSe = $input;
	}

	function getSensorType() {
		return $this->oTy;
	}

	function setSensorType($input) {
		$this->oTy = $input;
	}


	function getShieldEM() {
		return $this->sEmr;
	}

	function setShieldEM($input) {
		$this->sEmr = $input;
	}

	function getShieldTh() {
		return $this->sThr;
	}

	function setShieldTh($input) {
		$this->sThr = $input;
	}

	function getShieldKi() {
		return $this->sKir;
	}

	function setShieldKi($input) {
		$this->sKir = $input;
	}

	function getShieldEx() {
		return $this->sExr;
	}

	function setShieldEx($input) {
		$this->sExr = $input;
	}

	function getShieldRecharge() {
		return $this->sRe;
	}

	function setShieldRecharge($input) {
		$this->sRe = $input;
	}



	function getArmorEM() {
		return $this->aEmr;
	}

	function setArmorEM($input) {
		$this->aEmr = $input;
	}

	function getArmorTh() {
		return $this->aThr;
	}

	function setArmorTh($input) {
		$this->aThr = $input;
	}

	function getArmorKi() {
		return $this->aKir;
	}

	function setArmorKi($input) {
		$this->aKir = $input;
	}

	function getArmorEx() {
		return $this->aExr;
	}

	function setArmorEx($input) {
		$this->aExr = $input;
	}



	function getHullEM() {
		return $this->hEmr;
	}

	function setHullEM($input) {
		$this->hEmr = $input;
	}

	function getHullTh() {
		return $this->hThr;
	}

	function setHullTh($input) {
		$this->hThr = $input;
	}

	function getHullKi() {
		return $this->hKir;
	}

	function setHullKi($input) {
		$this->hKir = $input;
	}

	function getHullEx() {
		return $this->hExr;
	}

	function setHullEx($input) {
		$this->hExr = $input;
	}




	function getEffectiveShield() {
		return $this->effectiveShield;
	}

	function setEffectiveShield($input) {
		$this->effectiveShield = $input;
	}

	function getEffectiveArmor() {
		return $this->effectiveArmor;
	}

	function setEffectiveArmor($input) {
		$this->effectiveArmor = $input;
	}

	function getEffectiveHull() {
		return $this->effectiveHull;
	}

	function setEffectiveHull($input) {
		$this->effectiveHull = $input;
	}

	function getEffectiveHp() {
		return $this->effectiveHp;
	}

	function setEffectiveHp($input) {
		$this->effectiveHp = $input;
	}



	function getTankAmount() {
		return $this->tankAmount;
	}

	function setTankAmount($input) {
		$this->tankAmount = $input;
	}

	function getTankType() {
		return $this->tankType;
	}

	function setTankType($input) {
		$this->tankType = $input;
	}


	function getShipSpeed() {
		return $this->oSp;
	}

	function setShipSpeed($input) {
		$this->oSp = $input;
	}

	function getSigRadius() {
		return $this->oSi;
	}

	function setSigRadius($input) {
		$this->oSi = $input;
	}

	function getScan() {
		return $this->oSc;
	}

	function setScan($input) {
		$this->oSc = $input;
	}

	function getTarget() {
		return $this->oTa;
	}

	function setTarget($input) {
		$this->oTa = $input;
	}

	function getDistance() {
		return $this->oDi;
	}

	function setDistance($input) {
		$this->oDi = $input;
	}

	function getMass() {
		return $this->oMa;
	}

	function setMass($input) {
		$this->oMa = $input;
	}


	function getCapAmount() {
		return $this->cAm;
	}

	function setCapAmount($input) {
		$this->cAm = $input;
	}

	function getCapRecharge() {
		return $this->cRe;
	}

	function setCapRecharge($input) {
		$this->cRe = $input;
	}


	function getCapRechargeRate() {
		return $this->capRechargeRate;
	}

	function setCapRechargeRate($input) {
		$this->capRechargeRate = $input;
	}

	function getCapStatus() {
		return $this->capStatus;
	}

	function setCapStatus($input) {
		$this->capStatus = $input;
	}

	function getCapStable() {
		return $this->capStable;
	}

	function setCapStable($input) {
		$this->capStable = $input;
	}



	function getRSize() {
		return $this->rSize;
	}

	function setRSize($input) {
		$this->rSize = $input;
	}


	function getShipSlots() {
		return $this->shipSlots;
	}

	function setShipSlots($input) {
		$this->shipSlots = $input;
	}



	function getPilotName() {
		return $this->pilotName;
	}

	function setPilotName($input) {
		$this->pilotName = $input;
	}

	function getPilotCorp() {
		return $this->pilotCorp;
	}

	function setPilotCorp($input) {
		$this->pilotCorp = $input;
	}

	function getPilotAlliance() {
		return $this->pilotAlliance;
	}

	function setPilotAlliance($input) {
		$this->pilotAlliance = $input;
	}

	function getPilotShip() {
		return $this->pilotShip;
	}

	function setPilotShip($input) {
		$this->pilotShip = $input;
	}

	function getPilotLoc() {
		return $this->pilotLoc;
	}

	function getPilotLocReg() {
		return $this->pilotLocReg;
	}

	function setPilotLoc($input) {
		$this->pilotLoc = $input;
	}

	function setPilotLocReg($input) {
		$this->pilotLocReg = $input;
	}

	function getPilotLocSec() {
		return $this->pilotLocSec;
	}

	function setPilotLocSec($input) {
		$this->pilotLocSec = $input;
	}

	function getPilotDate() {
		return $this->pilotDate;
	}

	function setPilotDate($input) {
		$this->pilotDate = $input;
	}

	function getPilotDam() {
		return $this->pilotDam;
	}

	function setPilotDam($input) {
		$this->pilotDam = $input;
	}

	function getPilotCos() {
		return $this->pilotCos;
	}

	function setPilotCos($input) {
		$this->pilotCos = $input;
	}

	function getPilotShipClass() {
		return $this->pilotShipClass;
	}

	function setPilotShipClass($input) {
		$this->pilotShipClass = $input;
	}




	function getPilotPort() {
		return $this->pilotPort;
	}

	function setPilotPort($input) {
		$this->pilotPort = $input;
	}

	function getCorpPort() {
		return $this->corpPort;
	}

	function setCorpPort($input) {
		$this->corpPort = $input;
	}

	function getAlliPort() {
		return $this->alliPort;
	}

	function setAlliPort($input) {
		$this->alliPort = $input;
	}

	function getPilotNameURL() {
		return $this->pilotNameURL;
	}

	function setPilotNameURL($input) {
		$this->pilotNameURL = $input;
	}

	function getPilotCorpURL() {
		return $this->pilotCorpURL;
	}

	function setPilotCorpURL($input) {
		$this->pilotCorpURL = $input;
	}

	function getPilotAllianceURL() {
		return $this->pilotAllianceURL;
	}

	function setPilotAllianceURL($input) {
		$this->pilotAllianceURL = $input;
	}

	function getPilotShipURL() {
		return $this->pilotShipURL;
	}

	function setPilotShipURL($input) {
		$this->pilotShipURL = $input;
	}

	function getPilotLocURL() {
		return $this->pilotLocURL;
	}

	function setPilotLocURL($input) {
		$this->pilotLocURL = $input;
	}



	function getShipIcon() {
		return $this->shipIcon;
	}

	function setShipIcon($input) {
		$this->shipIcon = $input;
	}



	function getShipDesc() {
		return $this->shipDesc;
	}

	function setShipDesc($input) {
		$this->shipDesc = $input;
	}

	function getShipEffects() {
		return $this->shipEffects;
	}

	function setShipEffects($input) {
		$this->shipEffects = $input;
	}




	function getIsMWD() {
		return $this->isMWD;
	}

	function setIsMWD($input) {
		$this->isMWD = $input;
	}

	function getMwdBoost() {
		return $this->mwdBoost;
	}

	function setMwdBoost($input) {
		$this->mwdBoost = $input;
	}

	function getMwdSig() {
		return $this->mwdSig;
	}

	function setMwdSig($input) {
		$this->mwdSig = $input;
	}

	function getMwdThrust() {
		return $this->mwdThrust;
	}

	function setMwdThrust($input) {
		$this->mwdThrust = $input;
	}

	function getMwdMass() {
		return $this->mwdMass;
	}

	function setMwdMass($input) {
		$this->mwdMass = $input;
	}

	function getMwdSigRed() {
		return $this->mwdSigRed;
	}

	function setMwdSigRed($input) {
		$this->mwdSigRed = $input;
	}


	function getIsAB() {
		return $this->isAB;
	}

	function setIsAB($input) {
		$this->isAB = $input;
	}

	function getABBoost() {
		return $this->abBoost;
	}

	function setABBoost($input) {
		$this->abBoost = $input;
	}

	function getABThrust() {
		return $this->abThrust;
	}

	function setABThrust($input) {
		$this->abThrust = $input;
	}

	function getABMass() {
		return $this->abMass;
	}

	function setABMass($input) {
		$this->abMass = $input;
	}


	function getAbT3Boost() {
		return $this->abT3Boost;
	}

	function setAbT3Boost($input) {
		$this->abT3Boost = $input;
	}

	function getMwdT3Boost() {
		return $this->mwdT3Boost;
	}

	function setMwdT3Boost($input) {
		$this->mwdT3Boost = $input;
	}

	function getMwdT3Sig() {
		return $this->mwdT3Sig;
	}

	function setMwdT3Sig($input) {
		$this->mwdT3Sig = $input;
	}

	function getSpeedT3Cap() {
		return $this->mwdT3Cap;
	}

	function setSpeedT3Cap($input) {
		$this->mwdT3Cap = $input;
	}


	function getCapInj() {
		return $this->capInj;
	}

	function setCapInj($input) {
		$this->capInj = $input;
	}

	function getCapGJ() {
		return $this->capGJ;
	}

	function setCapGJ($input) {
		$this->capGJ = $input;
	}



	function getDamageMod() {
		return $this->damageMod;
	}

	function setDamageMod($input) {
		$this->damageMod = $input;
	}

	function getDamageGun() {
		return $this->damageGun;
	}

	function setDamageGun($input) {
		$this->damageGun = $input;
	}

	function getDamage() {
		return $this->damage;
	}

	function setDamage($input) {
		$this->damage = $input;
	}

	function getVolley() {
		return $this->volley;
	}

	function setVolley($input) {
		$this->volley = $input;
	}

	function getDamageModules() {
		return $this->damageModules;
	}

	function setDamageModules($input) {
		$this->damageModules = $input;
	}

	function getDroneDamage() {
		return $this->droneDamage;
	}

	function setDroneDamage($input) {
		$this->droneDamage = $input;
	}

	function getDroneDamageMod() {
		return $this->droneDamageMod;
	}

	function setDroneDamageMod($input) {
		$this->droneDamageMod = $input;
	}


	function getTransCap() {
		return $this->transCap;
	}

	function setTransCap($input) {
		$this->transCap = $input;
	}

	function getTransCapEff() {
		return $this->transCapEff;
	}

	function setTransCapEff($input) {
		$this->transCapEff = $input;
	}

	function getSensorBooster() {
		return $this->senBoost;
	}

	function setSensorBooster($input) {
		$this->senBoost = $input;
	}


	function getSigRadiusBoost() {
		return $this->sigRadiusBoost;
	}

	function setSigRadiusBoost($input) {
		$this->sigRadiusBoost = $input;
	}

	function getTankofShip() {
		return $this->tankTypeofship;
	}

	function setTankofShip($input) {
		$this->tankTypeofship = $input;
	}


	function getTankBoost() {
		return $this->tankBoost;
	}

	function setTankBoost($input) {
		$this->tankBoost = $input;
	}


	function getTankAmpShield() {
		return $this->tankAmpShield;
	}

	function setTankAmpShield($input) {
		$this->tankAmpShield = $input;
	}

	function getTankAmpArmor() {
		return $this->tankAmpArmor;
	}

	function setTankAmpArmor($input) {
		$this->tankAmpArmor = $input;
	}




	function getShipResists() {
		return $this->shipResists;
	}

	function setShipResists($input) {
		$this->shipResists = $input;
	}





	function getDroneDPS() {
		return $this->droneDPS;
	}

	function setDroneDPS($input) {
		$this->droneDPS = $input;
	}

	function getMissileDPS() {
		return $this->missileDPS;
	}

	function setMissileDPS($input) {
		$this->missileDPS = $input;
	}

	function getTurretDPS() {
		return $this->turretDPS;
	}

	function setTurretDPS($input) {
		$this->turretDPS = $input;
	}

	function getWarpSpeed() {
		return $this->warpSpeed;
	}

	function setWarpSpeed($input) {
		$this->warpSpeed = $input;
	}




	function getCalAmount() {
		return $this->cal_amount;
	}

	function setCalAmount($input) {
		$this->cal_amount = $input;
	}

	function getCalUsed() {
		return $this->cal_used;
	}

	function setCalUsed($input) {
		$this->cal_used = $input;
	}





	function getCpuAmount() {
		return $this->cpu_amount;
	}

	function setCpuAmount($input) {
		$this->cpu_amount = $input;
	}

	function getCpuUsed() {
		return $this->cpu_used;
	}

	function setCpuUsed($input) {
		$this->cpu_used = $input;
	}




	function getPrgAmount() {
		return $this->prg_amount;
	}

	function setPrgAmount($input) {
		$this->prg_amount = $input;
	}

	function getPrgUsed() {
		return $this->prg_used;
	}

	function setPrgUsed($input) {
		$this->prg_used = $input;
	}




	function getTurAmount() {
		return $this->tur_amount;
	}

	function setTurAmount($input) {
		$this->tur_amount = $input;
	}

	function getTurUsed() {
		return $this->tur_used;
	}

	function setTurUsed($input) {
		$this->tur_used = $input;
	}



	function getMisAmount() {
		return $this->mis_amount;
	}

	function setMisAmount($input) {
		$this->mis_amount = $input;
	}

	function getMisUsed() {
		return $this->mis_used;
	}

	function setMisUsed($input) {
		$this->mis_used = $input;
	}

}