<?php
namespace Fasthand\Service\Article;

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


class FasthandArticle {
  static $_TSPEC;

  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $uid = null;
  /**
   * @var string
   */
  public $title = null;
  /**
   * @var string
   */
  public $content = null;
  /**
   * @var string
   */
  public $create_time = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'uid',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'title',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'content',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'create_time',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['uid'])) {
        $this->uid = $vals['uid'];
      }
      if (isset($vals['title'])) {
        $this->title = $vals['title'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
      if (isset($vals['create_time'])) {
        $this->create_time = $vals['create_time'];
      }
    }
  }

  public function getName() {
    return 'FasthandArticle';
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
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->uid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->title);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->create_time);
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
    $xfer += $output->writeStructBegin('FasthandArticle');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 1);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->uid !== null) {
      $xfer += $output->writeFieldBegin('uid', TType::I32, 2);
      $xfer += $output->writeI32($this->uid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->title !== null) {
      $xfer += $output->writeFieldBegin('title', TType::STRING, 3);
      $xfer += $output->writeString($this->title);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 4);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->create_time !== null) {
      $xfer += $output->writeFieldBegin('create_time', TType::STRING, 5);
      $xfer += $output->writeString($this->create_time);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


