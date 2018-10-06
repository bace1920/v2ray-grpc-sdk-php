<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace Bluehead\V2ray\GPBMetadata\App\Proxyman;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Bluehead\V2ray\GPBMetadata\Common\Net\Address::initOnce();
        \Bluehead\V2ray\GPBMetadata\Common\Net\Port::initOnce();
        \Bluehead\V2ray\GPBMetadata\Transport\Internet\Config::initOnce();
        \Bluehead\V2ray\GPBMetadata\Common\Serial\TypedMessage::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac90e0a196170702f70726f78796d616e2f636f6e6669672e70726f746f" .
            "1220626c7565686561642e76327261792e636f72652e6170702e70726f78" .
            "796d616e1a15636f6d6d6f6e2f6e65742f706f72742e70726f746f1a1f74" .
            "72616e73706f72742f696e7465726e65742f636f6e6669672e70726f746f" .
            "1a21636f6d6d6f6e2f73657269616c2f74797065645f6d6573736167652e" .
            "70726f746f220f0a0d496e626f756e64436f6e66696722b1030a12416c6c" .
            "6f636174696f6e537472617465677912470a047479706518012001280e32" .
            "392e626c7565686561642e76327261792e636f72652e6170702e70726f78" .
            "796d616e2e416c6c6f636174696f6e53747261746567792e547970651267" .
            "0a0b636f6e63757272656e637918022001280b32522e626c756568656164" .
            "2e76327261792e636f72652e6170702e70726f78796d616e2e416c6c6f63" .
            "6174696f6e53747261746567792e416c6c6f636174696f6e537472617465" .
            "6779436f6e63757272656e6379125f0a077265667265736818032001280b" .
            "324e2e626c7565686561642e76327261792e636f72652e6170702e70726f" .
            "78796d616e2e416c6c6f636174696f6e53747261746567792e416c6c6f63" .
            "6174696f6e5374726174656779526566726573681a2e0a1d416c6c6f6361" .
            "74696f6e5374726174656779436f6e63757272656e6379120d0a0576616c" .
            "756518012001280d1a2a0a19416c6c6f636174696f6e5374726174656779" .
            "52656672657368120d0a0576616c756518012001280d222c0a0454797065" .
            "120a0a06416c776179731000120a0a0652616e646f6d1001120c0a084578" .
            "7465726e616c1002223f0a0e536e696666696e67436f6e666967120f0a07" .
            "656e61626c6564180120012808121c0a1464657374696e6174696f6e5f6f" .
            "7665727269646518022003280922f5030a0e5265636569766572436f6e66" .
            "6967123d0a0a706f72745f72616e676518012001280b32292e626c756568" .
            "6561642e76327261792e636f72652e636f6d6d6f6e2e6e65742e506f7274" .
            "52616e6765123a0a066c697374656e18022001280b322a2e626c75656865" .
            "61642e76327261792e636f72652e636f6d6d6f6e2e6e65742e49504f7244" .
            "6f6d61696e12510a13616c6c6f636174696f6e5f73747261746567791803" .
            "2001280b32342e626c7565686561642e76327261792e636f72652e617070" .
            "2e70726f78796d616e2e416c6c6f636174696f6e5374726174656779124d" .
            "0a0f73747265616d5f73657474696e677318042001280b32342e626c7565" .
            "686561642e76327261792e636f72652e7472616e73706f72742e696e7465" .
            "726e65742e53747265616d436f6e66696712240a1c726563656976655f6f" .
            "726967696e616c5f64657374696e6174696f6e180520012808124d0a0f64" .
            "6f6d61696e5f6f7665727269646518072003280e32302e626c7565686561" .
            "642e76327261792e636f72652e6170702e70726f78796d616e2e4b6e6f77" .
            "6e50726f746f636f6c7342021801124b0a11736e696666696e675f736574" .
            "74696e677318082001280b32302e626c7565686561642e76327261792e63" .
            "6f72652e6170702e70726f78796d616e2e536e696666696e67436f6e6669" .
            "674a040806100722b8010a14496e626f756e6448616e646c6572436f6e66" .
            "6967120b0a03746167180120012809124a0a1172656365697665725f7365" .
            "7474696e677318022001280b322f2e626c7565686561642e76327261792e" .
            "636f72652e636f6d6d6f6e2e73657269616c2e54797065644d6573736167" .
            "6512470a0e70726f78795f73657474696e677318032001280b322f2e626c" .
            "7565686561642e76327261792e636f72652e636f6d6d6f6e2e7365726961" .
            "6c2e54797065644d65737361676522100a0e4f7574626f756e64436f6e66" .
            "696722b5020a0c53656e646572436f6e66696712370a0376696118012001" .
            "280b322a2e626c7565686561642e76327261792e636f72652e636f6d6d6f" .
            "6e2e6e65742e49504f72446f6d61696e124d0a0f73747265616d5f736574" .
            "74696e677318022001280b32342e626c7565686561642e76327261792e63" .
            "6f72652e7472616e73706f72742e696e7465726e65742e53747265616d43" .
            "6f6e666967124b0a0e70726f78795f73657474696e677318032001280b32" .
            "332e626c7565686561642e76327261792e636f72652e7472616e73706f72" .
            "742e696e7465726e65742e50726f7879436f6e66696712500a126d756c74" .
            "69706c65785f73657474696e677318042001280b32342e626c7565686561" .
            "642e76327261792e636f72652e6170702e70726f78796d616e2e4d756c74" .
            "69706c6578696e67436f6e666967223a0a124d756c7469706c6578696e67" .
            "436f6e666967120f0a07656e61626c656418012001280812130a0b636f6e" .
            "63757272656e637918022001280d2a230a0e4b6e6f776e50726f746f636f" .
            "6c7312080a0448545450100012070a03544c53100142430a1b636f6d2e76" .
            "327261792e636f72652e6170702e70726f78796d616e50015a0870726f78" .
            "796d616eaa021756325261792e436f72652e4170702e50726f78796d616e" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

