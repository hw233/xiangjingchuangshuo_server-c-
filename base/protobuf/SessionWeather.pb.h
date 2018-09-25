// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: SessionWeather.proto

#ifndef PROTOBUF_SessionWeather_2eproto__INCLUDED
#define PROTOBUF_SessionWeather_2eproto__INCLUDED

#include <string>

#include <google/protobuf/stubs/common.h>

#if GOOGLE_PROTOBUF_VERSION < 2006000
#error This file was generated by a newer version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please update
#error your headers.
#endif
#if 2006001 < GOOGLE_PROTOBUF_MIN_PROTOC_VERSION
#error This file was generated by an older version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please
#error regenerate this file with a newer version of protoc.
#endif

#include <google/protobuf/generated_message_util.h>
#include <google/protobuf/message.h>
#include <google/protobuf/repeated_field.h>
#include <google/protobuf/extension_set.h>
#include <google/protobuf/generated_enum_reflection.h>
#include <google/protobuf/unknown_field_set.h>
#include "xCmd.pb.h"
// @@protoc_insertion_point(includes)

namespace Cmd {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_SessionWeather_2eproto();
void protobuf_AssignDesc_SessionWeather_2eproto();
void protobuf_ShutdownFile_SessionWeather_2eproto();

class WeatherChange;
class SkyChange;

enum WeatherParam {
  WEATHERPARAM_WEATHERCHANGE = 1,
  WEATHERPARAM_SKYCHANGE = 2
};
bool WeatherParam_IsValid(int value);
const WeatherParam WeatherParam_MIN = WEATHERPARAM_WEATHERCHANGE;
const WeatherParam WeatherParam_MAX = WEATHERPARAM_SKYCHANGE;
const int WeatherParam_ARRAYSIZE = WeatherParam_MAX + 1;

const ::google::protobuf::EnumDescriptor* WeatherParam_descriptor();
inline const ::std::string& WeatherParam_Name(WeatherParam value) {
  return ::google::protobuf::internal::NameOfEnum(
    WeatherParam_descriptor(), value);
}
inline bool WeatherParam_Parse(
    const ::std::string& name, WeatherParam* value) {
  return ::google::protobuf::internal::ParseNamedEnum<WeatherParam>(
    WeatherParam_descriptor(), name, value);
}
// ===================================================================

class WeatherChange : public ::google::protobuf::Message {
 public:
  WeatherChange();
  virtual ~WeatherChange();

  WeatherChange(const WeatherChange& from);

  inline WeatherChange& operator=(const WeatherChange& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const WeatherChange& default_instance();

  void Swap(WeatherChange* other);

  // implements Message ----------------------------------------------

  WeatherChange* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const WeatherChange& from);
  void MergeFrom(const WeatherChange& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  inline bool has_cmd() const;
  inline void clear_cmd();
  static const int kCmdFieldNumber = 1;
  inline ::Cmd::Command cmd() const;
  inline void set_cmd(::Cmd::Command value);

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
  inline bool has_param() const;
  inline void clear_param();
  static const int kParamFieldNumber = 2;
  inline ::Cmd::WeatherParam param() const;
  inline void set_param(::Cmd::WeatherParam value);

  // optional uint32 id = 3 [default = 0];
  inline bool has_id() const;
  inline void clear_id();
  static const int kIdFieldNumber = 3;
  inline ::google::protobuf::uint32 id() const;
  inline void set_id(::google::protobuf::uint32 value);

  // @@protoc_insertion_point(class_scope:Cmd.WeatherChange)
 private:
  inline void set_has_cmd();
  inline void clear_has_cmd();
  inline void set_has_param();
  inline void clear_has_param();
  inline void set_has_id();
  inline void clear_has_id();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int cmd_;
  int param_;
  ::google::protobuf::uint32 id_;
  friend void  protobuf_AddDesc_SessionWeather_2eproto();
  friend void protobuf_AssignDesc_SessionWeather_2eproto();
  friend void protobuf_ShutdownFile_SessionWeather_2eproto();

  void InitAsDefaultInstance();
  static WeatherChange* default_instance_;
};
// -------------------------------------------------------------------

class SkyChange : public ::google::protobuf::Message {
 public:
  SkyChange();
  virtual ~SkyChange();

  SkyChange(const SkyChange& from);

  inline SkyChange& operator=(const SkyChange& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const SkyChange& default_instance();

  void Swap(SkyChange* other);

  // implements Message ----------------------------------------------

  SkyChange* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const SkyChange& from);
  void MergeFrom(const SkyChange& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  inline bool has_cmd() const;
  inline void clear_cmd();
  static const int kCmdFieldNumber = 1;
  inline ::Cmd::Command cmd() const;
  inline void set_cmd(::Cmd::Command value);

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
  inline bool has_param() const;
  inline void clear_param();
  static const int kParamFieldNumber = 2;
  inline ::Cmd::WeatherParam param() const;
  inline void set_param(::Cmd::WeatherParam value);

  // optional uint32 id = 3 [default = 0];
  inline bool has_id() const;
  inline void clear_id();
  static const int kIdFieldNumber = 3;
  inline ::google::protobuf::uint32 id() const;
  inline void set_id(::google::protobuf::uint32 value);

  // optional uint32 sec = 4 [default = 0];
  inline bool has_sec() const;
  inline void clear_sec();
  static const int kSecFieldNumber = 4;
  inline ::google::protobuf::uint32 sec() const;
  inline void set_sec(::google::protobuf::uint32 value);

  // @@protoc_insertion_point(class_scope:Cmd.SkyChange)
 private:
  inline void set_has_cmd();
  inline void clear_has_cmd();
  inline void set_has_param();
  inline void clear_has_param();
  inline void set_has_id();
  inline void clear_has_id();
  inline void set_has_sec();
  inline void clear_has_sec();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int cmd_;
  int param_;
  ::google::protobuf::uint32 id_;
  ::google::protobuf::uint32 sec_;
  friend void  protobuf_AddDesc_SessionWeather_2eproto();
  friend void protobuf_AssignDesc_SessionWeather_2eproto();
  friend void protobuf_ShutdownFile_SessionWeather_2eproto();

  void InitAsDefaultInstance();
  static SkyChange* default_instance_;
};
// ===================================================================


// ===================================================================

// WeatherChange

// optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
inline bool WeatherChange::has_cmd() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void WeatherChange::set_has_cmd() {
  _has_bits_[0] |= 0x00000001u;
}
inline void WeatherChange::clear_has_cmd() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void WeatherChange::clear_cmd() {
  cmd_ = 53;
  clear_has_cmd();
}
inline ::Cmd::Command WeatherChange::cmd() const {
  // @@protoc_insertion_point(field_get:Cmd.WeatherChange.cmd)
  return static_cast< ::Cmd::Command >(cmd_);
}
inline void WeatherChange::set_cmd(::Cmd::Command value) {
  assert(::Cmd::Command_IsValid(value));
  set_has_cmd();
  cmd_ = value;
  // @@protoc_insertion_point(field_set:Cmd.WeatherChange.cmd)
}

// optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
inline bool WeatherChange::has_param() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void WeatherChange::set_has_param() {
  _has_bits_[0] |= 0x00000002u;
}
inline void WeatherChange::clear_has_param() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void WeatherChange::clear_param() {
  param_ = 1;
  clear_has_param();
}
inline ::Cmd::WeatherParam WeatherChange::param() const {
  // @@protoc_insertion_point(field_get:Cmd.WeatherChange.param)
  return static_cast< ::Cmd::WeatherParam >(param_);
}
inline void WeatherChange::set_param(::Cmd::WeatherParam value) {
  assert(::Cmd::WeatherParam_IsValid(value));
  set_has_param();
  param_ = value;
  // @@protoc_insertion_point(field_set:Cmd.WeatherChange.param)
}

// optional uint32 id = 3 [default = 0];
inline bool WeatherChange::has_id() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void WeatherChange::set_has_id() {
  _has_bits_[0] |= 0x00000004u;
}
inline void WeatherChange::clear_has_id() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void WeatherChange::clear_id() {
  id_ = 0u;
  clear_has_id();
}
inline ::google::protobuf::uint32 WeatherChange::id() const {
  // @@protoc_insertion_point(field_get:Cmd.WeatherChange.id)
  return id_;
}
inline void WeatherChange::set_id(::google::protobuf::uint32 value) {
  set_has_id();
  id_ = value;
  // @@protoc_insertion_point(field_set:Cmd.WeatherChange.id)
}

// -------------------------------------------------------------------

// SkyChange

// optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
inline bool SkyChange::has_cmd() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void SkyChange::set_has_cmd() {
  _has_bits_[0] |= 0x00000001u;
}
inline void SkyChange::clear_has_cmd() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void SkyChange::clear_cmd() {
  cmd_ = 53;
  clear_has_cmd();
}
inline ::Cmd::Command SkyChange::cmd() const {
  // @@protoc_insertion_point(field_get:Cmd.SkyChange.cmd)
  return static_cast< ::Cmd::Command >(cmd_);
}
inline void SkyChange::set_cmd(::Cmd::Command value) {
  assert(::Cmd::Command_IsValid(value));
  set_has_cmd();
  cmd_ = value;
  // @@protoc_insertion_point(field_set:Cmd.SkyChange.cmd)
}

// optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
inline bool SkyChange::has_param() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void SkyChange::set_has_param() {
  _has_bits_[0] |= 0x00000002u;
}
inline void SkyChange::clear_has_param() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void SkyChange::clear_param() {
  param_ = 2;
  clear_has_param();
}
inline ::Cmd::WeatherParam SkyChange::param() const {
  // @@protoc_insertion_point(field_get:Cmd.SkyChange.param)
  return static_cast< ::Cmd::WeatherParam >(param_);
}
inline void SkyChange::set_param(::Cmd::WeatherParam value) {
  assert(::Cmd::WeatherParam_IsValid(value));
  set_has_param();
  param_ = value;
  // @@protoc_insertion_point(field_set:Cmd.SkyChange.param)
}

// optional uint32 id = 3 [default = 0];
inline bool SkyChange::has_id() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void SkyChange::set_has_id() {
  _has_bits_[0] |= 0x00000004u;
}
inline void SkyChange::clear_has_id() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void SkyChange::clear_id() {
  id_ = 0u;
  clear_has_id();
}
inline ::google::protobuf::uint32 SkyChange::id() const {
  // @@protoc_insertion_point(field_get:Cmd.SkyChange.id)
  return id_;
}
inline void SkyChange::set_id(::google::protobuf::uint32 value) {
  set_has_id();
  id_ = value;
  // @@protoc_insertion_point(field_set:Cmd.SkyChange.id)
}

// optional uint32 sec = 4 [default = 0];
inline bool SkyChange::has_sec() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void SkyChange::set_has_sec() {
  _has_bits_[0] |= 0x00000008u;
}
inline void SkyChange::clear_has_sec() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void SkyChange::clear_sec() {
  sec_ = 0u;
  clear_has_sec();
}
inline ::google::protobuf::uint32 SkyChange::sec() const {
  // @@protoc_insertion_point(field_get:Cmd.SkyChange.sec)
  return sec_;
}
inline void SkyChange::set_sec(::google::protobuf::uint32 value) {
  set_has_sec();
  sec_ = value;
  // @@protoc_insertion_point(field_set:Cmd.SkyChange.sec)
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace Cmd

#ifndef SWIG
namespace google {
namespace protobuf {

template <> struct is_proto_enum< ::Cmd::WeatherParam> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::WeatherParam>() {
  return ::Cmd::WeatherParam_descriptor();
}

}  // namespace google
}  // namespace protobuf
#endif  // SWIG

// @@protoc_insertion_point(global_scope)

#endif  // PROTOBUF_SessionWeather_2eproto__INCLUDED