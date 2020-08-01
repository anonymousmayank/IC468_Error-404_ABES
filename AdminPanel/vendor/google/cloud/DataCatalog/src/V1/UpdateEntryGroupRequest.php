<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateEntryGroup][google.cloud.datacatalog.v1.DataCatalog.UpdateEntryGroup].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateEntryGroupRequest</code>
 */
class UpdateEntryGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated entry group. "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entry_group = null;
    /**
     * The fields to update on the entry group. If absent or empty, all modifiable
     * fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\EntryGroup $entry_group
     *           Required. The updated entry group. "name" field must be set.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The fields to update on the entry group. If absent or empty, all modifiable
     *           fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated entry group. "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\EntryGroup
     */
    public function getEntryGroup()
    {
        return $this->entry_group;
    }

    /**
     * Required. The updated entry group. "name" field must be set.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.EntryGroup entry_group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\EntryGroup $var
     * @return $this
     */
    public function setEntryGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\EntryGroup::class);
        $this->entry_group = $var;

        return $this;
    }

    /**
     * The fields to update on the entry group. If absent or empty, all modifiable
     * fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The fields to update on the entry group. If absent or empty, all modifiable
     * fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
