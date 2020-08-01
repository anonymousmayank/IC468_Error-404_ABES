<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class BigtableTableAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Common::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80490a33676f6f676c652f6269677461626c652f61646d696e2f76322f" .
            "6269677461626c655f7461626c655f61646d696e2e70726f746f1218676f" .
            "6f676c652e6269677461626c652e61646d696e2e76321a17676f6f676c65" .
            "2f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f" .
            "6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f61" .
            "70692f7265736f757263652e70726f746f1a25676f6f676c652f62696774" .
            "61626c652f61646d696e2f76322f636f6d6d6f6e2e70726f746f1a24676f" .
            "6f676c652f6269677461626c652f61646d696e2f76322f7461626c652e70" .
            "726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c696379" .
            "2e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e70" .
            "726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f70657261" .
            "74696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f64" .
            "75726174696f6e2e70726f746f1a1b676f6f676c652f70726f746f627566" .
            "2f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f" .
            "6669656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f" .
            "6275662f74696d657374616d702e70726f746f22fc010a12437265617465" .
            "5461626c655265717565737412380a06706172656e741801200128094228" .
            "e04102fa41220a206269677461626c652e676f6f676c65617069732e636f" .
            "6d2f496e7374616e636512150a087461626c655f69641802200128094203" .
            "e0410212330a057461626c6518032001280b321f2e676f6f676c652e6269" .
            "677461626c652e61646d696e2e76322e5461626c654203e04102124a0a0e" .
            "696e697469616c5f73706c69747318042003280b32322e676f6f676c652e" .
            "6269677461626c652e61646d696e2e76322e4372656174655461626c6552" .
            "6571756573742e53706c69741a140a0553706c6974120b0a036b65791801" .
            "2001280c22b4010a1e4372656174655461626c6546726f6d536e61707368" .
            "6f745265717565737412380a06706172656e741801200128094228e04102" .
            "fa41220a206269677461626c652e676f6f676c65617069732e636f6d2f49" .
            "6e7374616e636512150a087461626c655f69641802200128094203e04102" .
            "12410a0f736f757263655f736e617073686f741803200128094228e04102" .
            "fa41220a206269677461626c652e676f6f676c65617069732e636f6d2f53" .
            "6e617073686f742294010a1344726f70526f7752616e6765526571756573" .
            "7412330a046e616d651801200128094225e04102fa411f0a1d6269677461" .
            "626c652e676f6f676c65617069732e636f6d2f5461626c6512180a0e726f" .
            "775f6b65795f70726566697818022001280c480012240a1a64656c657465" .
            "5f616c6c5f646174615f66726f6d5f7461626c6518032001280848004208" .
            "0a0674617267657422a8010a114c6973745461626c657352657175657374" .
            "12380a06706172656e741801200128094228e04102fa41220a2062696774" .
            "61626c652e676f6f676c65617069732e636f6d2f496e7374616e63651232" .
            "0a047669657718022001280e32242e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e5461626c652e5669657712110a09706167655f73" .
            "697a6518042001280512120a0a706167655f746f6b656e18032001280922" .
            "5e0a124c6973745461626c6573526573706f6e7365122f0a067461626c65" .
            "7318012003280b321f2e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e5461626c6512170a0f6e6578745f706167655f746f6b656e18" .
            "0220012809227a0a0f4765745461626c655265717565737412330a046e61" .
            "6d651801200128094225e04102fa411f0a1d6269677461626c652e676f6f" .
            "676c65617069732e636f6d2f5461626c6512320a04766965771802200128" .
            "0e32242e676f6f676c652e6269677461626c652e61646d696e2e76322e54" .
            "61626c652e5669657722490a1244656c6574655461626c65526571756573" .
            "7412330a046e616d651801200128094225e04102fa411f0a1d6269677461" .
            "626c652e676f6f676c65617069732e636f6d2f5461626c6522da020a1b4d" .
            "6f64696679436f6c756d6e46616d696c6965735265717565737412330a04" .
            "6e616d651801200128094225e04102fa411f0a1d6269677461626c652e67" .
            "6f6f676c65617069732e636f6d2f5461626c65125e0a0d6d6f6469666963" .
            "6174696f6e7318022003280b32422e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e4d6f64696679436f6c756d6e46616d696c696573" .
            "526571756573742e4d6f64696669636174696f6e4203e041021aa5010a0c" .
            "4d6f64696669636174696f6e120a0a02696418012001280912380a066372" .
            "6561746518022001280b32262e676f6f676c652e6269677461626c652e61" .
            "646d696e2e76322e436f6c756d6e46616d696c79480012380a0675706461" .
            "746518032001280b32262e676f6f676c652e6269677461626c652e61646d" .
            "696e2e76322e436f6c756d6e46616d696c794800120e0a0464726f701804" .
            "20012808480042050a036d6f6422560a1f47656e6572617465436f6e7369" .
            "7374656e6379546f6b656e5265717565737412330a046e616d6518012001" .
            "28094225e04102fa411f0a1d6269677461626c652e676f6f676c65617069" .
            "732e636f6d2f5461626c65223d0a2047656e6572617465436f6e73697374" .
            "656e6379546f6b656e526573706f6e736512190a11636f6e73697374656e" .
            "63795f746f6b656e180120012809226e0a17436865636b436f6e73697374" .
            "656e63795265717565737412330a046e616d651801200128094225e04102" .
            "fa411f0a1d6269677461626c652e676f6f676c65617069732e636f6d2f54" .
            "61626c65121e0a11636f6e73697374656e63795f746f6b656e1802200128" .
            "094203e04102222e0a18436865636b436f6e73697374656e637952657370" .
            "6f6e736512120a0a636f6e73697374656e7418012001280822dc010a1453" .
            "6e617073686f745461626c655265717565737412330a046e616d65180120" .
            "0128094225e04102fa411f0a1d6269677461626c652e676f6f676c656170" .
            "69732e636f6d2f5461626c6512380a07636c757374657218022001280942" .
            "27e04102fa41210a1f6269677461626c652e676f6f676c65617069732e63" .
            "6f6d2f436c757374657212180a0b736e617073686f745f69641803200128" .
            "094203e0410212260a0374746c18042001280b32192e676f6f676c652e70" .
            "726f746f6275662e4475726174696f6e12130a0b6465736372697074696f" .
            "6e180520012809224c0a12476574536e617073686f745265717565737412" .
            "360a046e616d651801200128094228e04102fa41220a206269677461626c" .
            "652e676f6f676c65617069732e636f6d2f536e617073686f7422760a144c" .
            "697374536e617073686f74735265717565737412370a06706172656e7418" .
            "01200128094227e04102fa41210a1f6269677461626c652e676f6f676c65" .
            "617069732e636f6d2f436c757374657212110a09706167655f73697a6518" .
            "022001280512120a0a706167655f746f6b656e18032001280922670a154c" .
            "697374536e617073686f7473526573706f6e736512350a09736e61707368" .
            "6f747318012003280b32222e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e536e617073686f7412170a0f6e6578745f706167655f74" .
            "6f6b656e180220012809224f0a1544656c657465536e617073686f745265" .
            "717565737412360a046e616d651801200128094228e04102fa41220a2062" .
            "69677461626c652e676f6f676c65617069732e636f6d2f536e617073686f" .
            "7422c4010a15536e617073686f745461626c654d6574616461746112480a" .
            "106f726967696e616c5f7265717565737418012001280b322e2e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e76322e536e617073686f7454" .
            "61626c655265717565737412300a0c726571756573745f74696d65180220" .
            "01280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d" .
            "70122f0a0b66696e6973685f74696d6518032001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d7022d8010a1f4372656174" .
            "655461626c6546726f6d536e617073686f744d6574616461746112520a10" .
            "6f726967696e616c5f7265717565737418012001280b32382e676f6f676c" .
            "652e6269677461626c652e61646d696e2e76322e4372656174655461626c" .
            "6546726f6d536e617073686f745265717565737412300a0c726571756573" .
            "745f74696d6518022001280b321a2e676f6f676c652e70726f746f627566" .
            "2e54696d657374616d70122f0a0b66696e6973685f74696d651803200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022" .
            "9d010a134372656174654261636b75705265717565737412370a06706172" .
            "656e741801200128094227e04102fa41210a1f6269677461626c652e676f" .
            "6f676c65617069732e636f6d2f436c757374657212160a096261636b7570" .
            "5f69641802200128094203e0410212350a066261636b757018032001280b" .
            "32202e676f6f676c652e6269677461626c652e61646d696e2e76322e4261" .
            "636b75704203e041022298010a144372656174654261636b75704d657461" .
            "64617461120c0a046e616d6518012001280912140a0c736f757263655f74" .
            "61626c65180220012809122e0a0a73746172745f74696d6518032001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d70122c" .
            "0a08656e645f74696d6518042001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d7022480a104765744261636b7570526571" .
            "7565737412340a046e616d651801200128094226e04102fa41200a1e6269" .
            "677461626c652e676f6f676c65617069732e636f6d2f4261636b75702282" .
            "010a135570646174654261636b75705265717565737412350a066261636b" .
            "757018012001280b32202e676f6f676c652e6269677461626c652e61646d" .
            "696e2e76322e4261636b75704203e0410212340a0b7570646174655f6d61" .
            "736b18022001280b321a2e676f6f676c652e70726f746f6275662e466965" .
            "6c644d61736b4203e04102224b0a1344656c6574654261636b7570526571" .
            "7565737412340a046e616d651801200128094226e04102fa41200a1e6269" .
            "677461626c652e676f6f676c65617069732e636f6d2f4261636b75702296" .
            "010a124c6973744261636b7570735265717565737412370a06706172656e" .
            "741801200128094227e04102fa41210a1f6269677461626c652e676f6f67" .
            "6c65617069732e636f6d2f436c7573746572120e0a0666696c7465721802" .
            "2001280912100a086f726465725f627918032001280912110a0970616765" .
            "5f73697a6518042001280512120a0a706167655f746f6b656e1805200128" .
            "0922610a134c6973744261636b757073526573706f6e736512310a076261" .
            "636b75707318012003280b32202e676f6f676c652e6269677461626c652e" .
            "61646d696e2e76322e4261636b757012170a0f6e6578745f706167655f74" .
            "6f6b656e18022001280922530a13526573746f72655461626c6552657175" .
            "657374120e0a06706172656e7418012001280912100a087461626c655f69" .
            "6418022001280912100a066261636b7570180320012809480042080a0673" .
            "6f757263652298020a14526573746f72655461626c654d65746164617461" .
            "120c0a046e616d6518012001280912400a0b736f757263655f7479706518" .
            "022001280e322b2e676f6f676c652e6269677461626c652e61646d696e2e" .
            "76322e526573746f7265536f7572636554797065123b0a0b6261636b7570" .
            "5f696e666f18032001280b32242e676f6f676c652e6269677461626c652e" .
            "61646d696e2e76322e4261636b7570496e666f480012250a1d6f7074696d" .
            "697a655f7461626c655f6f7065726174696f6e5f6e616d65180420012809" .
            "123d0a0870726f677265737318052001280b322b2e676f6f676c652e6269" .
            "677461626c652e61646d696e2e76322e4f7065726174696f6e50726f6772" .
            "657373420d0a0b736f757263655f696e666f226c0a1d4f7074696d697a65" .
            "526573746f7265645461626c654d65746164617461120c0a046e616d6518" .
            "0120012809123d0a0870726f677265737318022001280b322b2e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e76322e4f7065726174696f6e" .
            "50726f67726573733281240a124269677461626c655461626c6541646d69" .
            "6e12ab010a0b4372656174655461626c65122c2e676f6f676c652e626967" .
            "7461626c652e61646d696e2e76322e4372656174655461626c6552657175" .
            "6573741a1f2e676f6f676c652e6269677461626c652e61646d696e2e7632" .
            "2e5461626c65224d82d3e493022f222a2f76322f7b706172656e743d7072" .
            "6f6a656374732f2a2f696e7374616e6365732f2a7d2f7461626c65733a01" .
            "2ada4115706172656e742c7461626c655f69642c7461626c65128a020a17" .
            "4372656174655461626c6546726f6d536e617073686f7412382e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e76322e437265617465546162" .
            "6c6546726f6d536e617073686f74526571756573741a1d2e676f6f676c65" .
            "2e6c6f6e6772756e6e696e672e4f7065726174696f6e22950182d3e49302" .
            "42223d2f76322f7b706172656e743d70726f6a656374732f2a2f696e7374" .
            "616e6365732f2a7d2f7461626c65733a63726561746546726f6d536e6170" .
            "73686f743a012ada411f706172656e742c7461626c655f69642c736f7572" .
            "63655f736e617073686f74ca41280a055461626c65121f43726561746554" .
            "61626c6546726f6d536e617073686f744d6574616461746112a4010a0a4c" .
            "6973745461626c6573122b2e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e4c6973745461626c6573526571756573741a2c2e676f6f" .
            "676c652e6269677461626c652e61646d696e2e76322e4c6973745461626c" .
            "6573526573706f6e7365223b82d3e493022c122a2f76322f7b706172656e" .
            "743d70726f6a656374732f2a2f696e7374616e6365732f2a7d2f7461626c" .
            "6573da4106706172656e741291010a084765745461626c6512292e676f6f" .
            "676c652e6269677461626c652e61646d696e2e76322e4765745461626c65" .
            "526571756573741a1f2e676f6f676c652e6269677461626c652e61646d69" .
            "6e2e76322e5461626c65223982d3e493022c122a2f76322f7b6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f" .
            "2a7dda41046e616d65128e010a0b44656c6574655461626c65122c2e676f" .
            "6f676c652e6269677461626c652e61646d696e2e76322e44656c65746554" .
            "61626c65526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d707479223982d3e493022c2a2a2f76322f7b6e616d653d70726f6a65" .
            "6374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a7dda4104" .
            "6e616d6512cf010a144d6f64696679436f6c756d6e46616d696c69657312" .
            "352e676f6f676c652e6269677461626c652e61646d696e2e76322e4d6f64" .
            "696679436f6c756d6e46616d696c696573526571756573741a1f2e676f6f" .
            "676c652e6269677461626c652e61646d696e2e76322e5461626c65225f82" .
            "d3e4930244223f2f76322f7b6e616d653d70726f6a656374732f2a2f696e" .
            "7374616e6365732f2a2f7461626c65732f2a7d3a6d6f64696679436f6c75" .
            "6d6e46616d696c6965733a012ada41126e616d652c6d6f64696669636174" .
            "696f6e731299010a0c44726f70526f7752616e6765122d2e676f6f676c65" .
            "2e6269677461626c652e61646d696e2e76322e44726f70526f7752616e67" .
            "65526571756573741a162e676f6f676c652e70726f746f6275662e456d70" .
            "7479224282d3e493023c22372f76322f7b6e616d653d70726f6a65637473" .
            "2f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d3a64726f7052" .
            "6f7752616e67653a012a12e8010a1847656e6572617465436f6e73697374" .
            "656e6379546f6b656e12392e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e47656e6572617465436f6e73697374656e6379546f6b65" .
            "6e526571756573741a3a2e676f6f676c652e6269677461626c652e61646d" .
            "696e2e76322e47656e6572617465436f6e73697374656e6379546f6b656e" .
            "526573706f6e7365225582d3e493024822432f76322f7b6e616d653d7072" .
            "6f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d" .
            "3a67656e6572617465436f6e73697374656e6379546f6b656e3a012ada41" .
            "046e616d6512da010a10436865636b436f6e73697374656e637912312e67" .
            "6f6f676c652e6269677461626c652e61646d696e2e76322e436865636b43" .
            "6f6e73697374656e6379526571756573741a322e676f6f676c652e626967" .
            "7461626c652e61646d696e2e76322e436865636b436f6e73697374656e63" .
            "79526573706f6e7365225f82d3e4930240223b2f76322f7b6e616d653d70" .
            "726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a" .
            "7d3a636865636b436f6e73697374656e63793a012ada41166e616d652c63" .
            "6f6e73697374656e63795f746f6b656e12ea010a0d536e617073686f7454" .
            "61626c65122e2e676f6f676c652e6269677461626c652e61646d696e2e76" .
            "322e536e617073686f745461626c65526571756573741a1d2e676f6f676c" .
            "652e6c6f6e6772756e6e696e672e4f7065726174696f6e22890182d3e493" .
            "023822332f76322f7b6e616d653d70726f6a656374732f2a2f696e737461" .
            "6e6365732f2a2f7461626c65732f2a7d3a736e617073686f743a012ada41" .
            "246e616d652c636c75737465722c736e617073686f745f69642c64657363" .
            "72697074696f6eca41210a08536e617073686f741215536e617073686f74" .
            "5461626c654d6574616461746112a8010a0b476574536e617073686f7412" .
            "2c2e676f6f676c652e6269677461626c652e61646d696e2e76322e476574" .
            "536e617073686f74526571756573741a222e676f6f676c652e6269677461" .
            "626c652e61646d696e2e76322e536e617073686f74224782d3e493023a12" .
            "382f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f636c7573746572732f2a2f736e617073686f74732f2a7dda4104" .
            "6e616d6512bb010a0d4c697374536e617073686f7473122e2e676f6f676c" .
            "652e6269677461626c652e61646d696e2e76322e4c697374536e61707368" .
            "6f7473526571756573741a2f2e676f6f676c652e6269677461626c652e61" .
            "646d696e2e76322e4c697374536e617073686f7473526573706f6e736522" .
            "4982d3e493023a12382f76322f7b706172656e743d70726f6a656374732f" .
            "2a2f696e7374616e6365732f2a2f636c7573746572732f2a7d2f736e6170" .
            "73686f7473da4106706172656e7412a2010a0e44656c657465536e617073" .
            "686f74122f2e676f6f676c652e6269677461626c652e61646d696e2e7632" .
            "2e44656c657465536e617073686f74526571756573741a162e676f6f676c" .
            "652e70726f746f6275662e456d707479224782d3e493023a2a382f76322f" .
            "7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f63" .
            "6c7573746572732f2a2f736e617073686f74732f2a7dda41046e616d6512" .
            "c5010a0c4372656174654261636b7570122d2e676f6f676c652e62696774" .
            "61626c652e61646d696e2e76322e4372656174654261636b757052657175" .
            "6573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f70657261" .
            "74696f6e226782d3e493024022362f76322f7b706172656e743d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f636c7573746572732f2a7d" .
            "2f6261636b7570733a066261636b7570ca411e0a064261636b7570121443" .
            "72656174654261636b75704d657461646174611299010a09476574426163" .
            "6b7570122a2e676f6f676c652e6269677461626c652e61646d696e2e7632" .
            "2e4765744261636b7570526571756573741a202e676f6f676c652e626967" .
            "7461626c652e61646d696e2e76322e4261636b7570223e82d3e493023812" .
            "362f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f636c7573746572732f2a2f6261636b7570732f2a7d12ae010a0c" .
            "5570646174654261636b7570122d2e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e5570646174654261636b7570526571756573741a" .
            "202e676f6f676c652e6269677461626c652e61646d696e2e76322e426163" .
            "6b7570224d82d3e4930247323d2f76322f7b6261636b75702e6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f636c7573746572" .
            "732f2a2f6261636b7570732f2a7d3a066261636b75701295010a0c44656c" .
            "6574654261636b7570122d2e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e44656c6574654261636b7570526571756573741a162e67" .
            "6f6f676c652e70726f746f6275662e456d707479223e82d3e49302382a36" .
            "2f76322f7b6e616d653d70726f6a656374732f2a2f696e7374616e636573" .
            "2f2a2f636c7573746572732f2a2f6261636b7570732f2a7d12aa010a0b4c" .
            "6973744261636b757073122c2e676f6f676c652e6269677461626c652e61" .
            "646d696e2e76322e4c6973744261636b757073526571756573741a2d2e67" .
            "6f6f676c652e6269677461626c652e61646d696e2e76322e4c6973744261" .
            "636b757073526573706f6e7365223e82d3e493023812362f76322f7b7061" .
            "72656e743d70726f6a656374732f2a2f696e7374616e6365732f2a2f636c" .
            "7573746572732f2a7d2f6261636b75707312bb010a0c526573746f726554" .
            "61626c65122d2e676f6f676c652e6269677461626c652e61646d696e2e76" .
            "322e526573746f72655461626c65526571756573741a1d2e676f6f676c65" .
            "2e6c6f6e6772756e6e696e672e4f7065726174696f6e225d82d3e4930237" .
            "22322f76322f7b706172656e743d70726f6a656374732f2a2f696e737461" .
            "6e6365732f2a7d2f7461626c65733a726573746f72653a012aca411d0a05" .
            "5461626c651214526573746f72655461626c654d65746164617461129c01" .
            "0a0c47657449616d506f6c69637912222e676f6f676c652e69616d2e7631" .
            "2e47657449616d506f6c696379526571756573741a152e676f6f676c652e" .
            "69616d2e76312e506f6c696379225182d3e4930240223b2f76322f7b7265" .
            "736f757263653d70726f6a656374732f2a2f696e7374616e6365732f2a2f" .
            "7461626c65732f2a7d3a67657449616d506f6c6963793a012ada41087265" .
            "736f7572636512f3010a0c53657449616d506f6c69637912222e676f6f67" .
            "6c652e69616d2e76312e53657449616d506f6c696379526571756573741a" .
            "152e676f6f676c652e69616d2e76312e506f6c69637922a70182d3e49302" .
            "8e01223b2f76322f7b7265736f757263653d70726f6a656374732f2a2f69" .
            "6e7374616e6365732f2a2f7461626c65732f2a7d3a73657449616d506f6c" .
            "6963793a012a5a4c22472f76322f7b7265736f757263653d70726f6a6563" .
            "74732f2a2f696e7374616e6365732f2a2f636c7573746572732f2a2f6261" .
            "636b7570732f2a7d3a73657449616d506f6c6963793a012ada410f726573" .
            "6f757263652c706f6c69637912a4020a125465737449616d5065726d6973" .
            "73696f6e7312282e676f6f676c652e69616d2e76312e5465737449616d50" .
            "65726d697373696f6e73526571756573741a292e676f6f676c652e69616d" .
            "2e76312e5465737449616d5065726d697373696f6e73526573706f6e7365" .
            "22b80182d3e493029a0122412f76322f7b7265736f757263653d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f7461626c65732f2a7d3a74" .
            "65737449616d5065726d697373696f6e733a012a5a52224d2f76322f7b72" .
            "65736f757263653d70726f6a656374732f2a2f696e7374616e6365732f2a" .
            "2f636c7573746572732f2a2f6261636b7570732f2a7d3a7465737449616d" .
            "5065726d697373696f6e733a012ada41147265736f757263652c7065726d" .
            "697373696f6e731ade02ca411c6269677461626c6561646d696e2e676f6f" .
            "676c65617069732e636f6dd241bb0268747470733a2f2f7777772e676f6f" .
            "676c65617069732e636f6d2f617574682f6269677461626c652e61646d69" .
            "6e2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61" .
            "7574682f6269677461626c652e61646d696e2e7461626c652c6874747073" .
            "3a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f" .
            "75642d6269677461626c652e61646d696e2c68747470733a2f2f7777772e" .
            "676f6f676c65617069732e636f6d2f617574682f636c6f75642d62696774" .
            "61626c652e61646d696e2e7461626c652c68747470733a2f2f7777772e67" .
            "6f6f676c65617069732e636f6d2f617574682f636c6f75642d706c617466" .
            "6f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d" .
            "2f617574682f636c6f75642d706c6174666f726d2e726561642d6f6e6c79" .
            "42ba010a1c636f6d2e676f6f676c652e6269677461626c652e61646d696e" .
            "2e763242174269677461626c655461626c6541646d696e50726f746f5001" .
            "5a3d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f67" .
            "6f6f676c65617069732f6269677461626c652f61646d696e2f76323b6164" .
            "6d696eaa021e476f6f676c652e436c6f75642e4269677461626c652e4164" .
            "6d696e2e5632ca021e476f6f676c655c436c6f75645c4269677461626c65" .
            "5c41646d696e5c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
