<?php
namespace Fasthand\Service\User;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class FasthandUser {
  static $_TSPEC;

  /**
   * @var int
   */
  public $id = null;
  /**
   * @var string
   */
  public $username = null;
  /**
   * @var string
   */
  public $nick = null;
  /**
   * @var string
   */
  public $password = null;
  /**
   * @var int
   */
  public $age = null;
  /**
   * @var string
   */
  public $extendInfo = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'nick',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'password',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'age',
          'type' => TType::BYTE,
          ),
        6 => array(
          'var' => 'extendInfo',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['nick'])) {
        $this->nick = $vals['nick'];
      }
      if (isset($vals['password'])) {
        $this->password = $vals['password'];
      }
      if (isset($vals['age'])) {
        $this->age = $vals['age'];
      }
      if (isset($vals['extendInfo'])) {
        $this->extendInfo = $vals['extendInfo'];
      }
    }
  }

  public function getName() {
    return 'FasthandUser';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nick);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->password);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->age);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->extendInfo);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FasthandUser');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 1);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 2);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nick !== null) {
      $xfer += $output->writeFieldBegin('nick', TType::STRING, 3);
      $xfer += $output->writeString($this->nick);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->password !== null) {
      $xfer += $output->writeFieldBegin('password', TType::STRING, 4);
      $xfer += $output->writeString($this->password);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->age !== null) {
      $xfer += $output->writeFieldBegin('age', TType::BYTE, 5);
      $xfer += $output->writeByte($this->age);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->extendInfo !== null) {
      $xfer += $output->writeFieldBegin('extendInfo', TType::STRING, 6);
      $xfer += $output->writeString($this->extendInfo);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

