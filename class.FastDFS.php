<?php

/**
 * FastDFS client Class
 * @author Rebill.Ruan
 */
class FastDFS
{
    /**
     * FastDFS class constructor
     *
     * @param int $config_index use which config file, base 0. default is 0
     * @param bool $bMultiThread if in multi-thread, default is false
     */
    public function __construct($config_index = 0, $bMultiThread = false){}

    /**
     * get a connected tracker server
     * return array for success, false for error
     * the assoc array including elements: ip_addr, port and sock
     *
     * @return array|bool
     */
    public function tracker_get_connection(){}

    /**
     * connect to all tracker servers
     * return true for success, false for error
     *
     * @return bool
     */
    public function tracker_make_all_connections(){}

    /**
     * close all connections to the tracker servers
     * return true for success, false for error
     *
     * @return bool
     */
    public function tracker_close_all_connections(){}

    /**
     * send ACTIVE_TEST cmd to the server
     * return true for success, false for error
     *
     * @param array $server_info the assoc array including elements: ip_addr, port and sock, sock must be connected
     * @return bool
     */
    public function active_test(array $server_info){}

    /**
     * connect to the server
     * return array for success, false for error
     *
     * @param string $ip_addr the ip address of the server
     * @param int $port the port of the server
     * @return array|bool
     */
    public function connect_server($ip_addr, $port){}

    /**
     * disconnect from the server
     * return true for success, false for error
     *
     * @param array $server_info the assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function disconnect_server(array $server_info){}

    /**
     * get group stat info
     * return index array for success, false for error, each group as a array element
     *
     * @param string $group_name the group name of the master file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_list_groups($group_name='', $tracker_server=array()){}

    /**
     * get the storage server info to upload file
     * return assoc array for success, false for error. the assoc array including elements: ip_addr, port, sock and store_path_index
     *
     * @param string $group_name the group name of the master file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_store($group_name='', $tracker_server=array()){}

    /**
     * get the storage server list to upload file
     * return indexed storage server array for success, false for error.
     * each element is an ssoc array including elements: ip_addr, port, sock and store_path_index
     *
     * @param string $group_name the group name of the master file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_store_list($group_name='', $tracker_server=array()){}

    /**
     * get the storage server info to set metadata
     * return assoc array for success, false for error
     * the assoc array including elements: ip_addr, port and sock
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_update($group_name, $remote_filename, $tracker_server=array()){}

    /**
     * get the storage server info to download file (or get metadata)
     * return assoc array for success, false for error
     * the assoc array including elements: ip_addr, port and sock
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_fetch($group_name, $remote_filename, $tracker_server=array()){}

    /**
     * get the storage server list which can retrieve the file content or metadata
     * return index array for success, false for error.
     * each server as an array element
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_list($group_name, $remote_filename, $tracker_server=array()){}

    /**
     * get the storage server info to set metadata
     * return assoc array for success, false for error
     * the assoc array including elements: ip_addr, port and sock
     *
     * @param string $file_id the file id of the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_update1($file_id, $tracker_server=array()){}

    /**
     * get the storage server info to download file (or get metadata)
     * return assoc array for success, false for error
     * the assoc array including elements: ip_addr, port and sock
     *
     * @param string $file_id the file id of the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_fetch1($file_id, $tracker_server=array()){}

    /**
     * get the storage server list which can retrieve the file content or metadata
     * return index array for success, false for error.
     * each server as an array element
     *
     * @param string $file_id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function tracker_query_storage_list1($file_id, $tracker_server=array()){}

    /**
     * delete the storage server from the cluster
     * return true for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $storage_ip the ip address of the storage server to be deleted
     * @return bool
     */
    public function tracker_delete_storage($group_name, $storage_ip){}

    /**
     * upload local file to storage server
     * return assoc array for success, false for error.
     * the returned array includes elements: group_name and filename
     *
     * @param string $local_filename the local filename
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_by_filename($local_filename, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload local file to storage server
     * return file_id for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_by_filename1($local_filename, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server
     * return array for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_by_filebuff($file_buff, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server
     * return file_id for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_by_filebuff1($file_buff, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback
     * return assoc array for success, false for error.
     * the returned array includes elements: group_name and filename
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_by_callback(array $callback_array, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback
     * return file_id  for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_by_callback1(array $callback_array, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * append local file to the appender file of storage server
     * return string/array for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return mixed
     */
    public function storage_append_by_filename($local_filename, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * append local file to the appender file of storage server
     * return file_id for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_append_by_filename1($local_filename, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * append file buff to the appender file of storage server
     * return array for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_append_by_filebuff($file_buff, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * append file buff to the appender file of storage server
     * return file_id  for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_append_by_filebuff1($file_buff, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * append file to the appender file of storage server by callback
     * return array for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_append_by_callback(array $callback_array, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * append file buff to the appender file of storage server
     * return file_id  for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_append_by_callback1(array $callback_array, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by local file
     * return true for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_filename($local_filename, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by local file
     * return true for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_filename1($local_filename, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by file buff
     * return true for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_filebuff($file_buff, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by file buff
     * return true for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_filebuff1($file_buff, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by callback
     * return true for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $group_name the the group name of appender file
     * @param string $appender_filename the appender filename
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_callback(array $callback_array, $group_name, $appender_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * modify appender file by callback
     * return true for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $appender_file_id the appender file id
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_modify_by_callback1(array $callback_array, $appender_file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * upload local file to storage server as appender file
     * return assoc array for success, false for error.
     * the returned array includes elements: group_name and filename
     *
     * @param string $local_filename the local filename
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_appender_by_filename($local_filename, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload local file to storage server as appender file
     * return file_id for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_appender_by_filename1($local_filename, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server as appender file
     * return assoc array for success, false for error.
     * the returned array includes elements: group_name and filename
     *
     * @param string $file_buff the file content
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_appender_by_filebuff($file_buff, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server as appender file
     * return file_id for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_appender_by_filebuff1($file_buff, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback as appender file
     * return assoc array for success, false for error.
     * the returned array includes elements: group_name and filename
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_appender_by_callback(array $callback_array, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback as appender file
     * return file_id  for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $group_name specify the group name to store the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_appender_by_callback1(array $callback_array, $file_ext_name='', $meta_list=array(), $group_name='', $tracker_server=array(), $storage_server=array()){}

    /**
     * upload local file to storage server (slave file mode)
     * return array for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $group_name the group name of the master file
     * @param string $master_filename the master filename to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_slave_by_filename($local_filename, $group_name, $master_filename, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * upload local file to storage server (slave file mode)
     * return file_id for success, false for error
     *
     * @param string $local_filename the local filename
     * @param string $master_file_id the master file id to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_slave_by_filename1($local_filename, $master_file_id, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server (slave file mode)
     * return array for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $group_name the group name of the master file
     * @param string $master_filename the master filename to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_slave_by_filebuff($file_buff, $group_name, $master_filename, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file buff to storage server (slave file mode)
     * return file_id  for success, false for error
     *
     * @param string $file_buff the file content
     * @param string $master_file_id the master file id to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_slave_by_filebuff1($file_buff, $master_file_id, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback (slave file mode)
     * return array for success, false for error
     * the returned array includes elements: group_name and filename
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $group_name the group name of the master file
     * @param string $master_filename the master filename to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_upload_slave_by_callback(array $callback_array, $group_name, $master_filename, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * upload file to storage server by callback (slave file mode)
     * return file_id  for success, false for error
     *
     * @param array $callback_array the callback assoc array, must have keys:
     *   callback  - the php callback function name callback function prototype as: function upload_file_callback($sock, $args)
     *   file_size - the file size
     *   args      - use argument for callback function
     * @param string $master_file_id the master file id to generate the slave file id
     * @param string $prefix_name the prefix name to generate the slave file id
     * @param string $file_ext_name the file extension name, do not include dot(.)
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_upload_slave_by_callback1(array $callback_array, $master_file_id, $prefix_name, $file_ext_name='', $meta_list=array(), $tracker_server=array(), $storage_server=array()){}

    /**
     * delete file from storage server
     * return true for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_delete_file($group_name, $remote_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * delete file from storage server
     * return true for success, false for error
     *
     * @param string $file_id the file id to be deleted
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_delete_file1($file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * truncate appender file to specify size
     * return true for success, false for error
     *
     * @param string $group_name the the group name of appender file
     * @param string $remote_filename the filename on the storage server
     * @param string $truncated_file_size truncate the file size to
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_truncate_file($group_name, $remote_filename, $truncated_file_size='', $tracker_server=array(), $storage_server=array()){}

    /**
     * truncate appender file to specify size
     * return true for success, false for error
     *
     * @param string $file_id the appender file id
     * @param string $truncated_file_size truncate the file size to
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_truncate_file1($file_id, $truncated_file_size='', $tracker_server=array(), $storage_server=array()){}

    /**
     * get file content from storage server
     * return file content for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_download_file_to_buff($group_name, $remote_filename, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * get file content from storage server
     * return file content for success, false for error
     *
     * @param string $file_id the file id of the file
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return string|bool
     */
    public function storage_download_file_to_buff1($file_id, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * download file from storage server to local file
     * return true for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param string $local_filename the local filename to save the file content
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_download_file_to_file($group_name, $remote_filename, $local_filename, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * download file from storage server to local file
     * return true for success, false for error
     *
     * @param string $file_id the file id of the file
     * @param string $local_filename the local filename to save the file content
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_download_file_to_file1($file_id, $local_filename, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * return true for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $download_callback the download callback array, elements as:
     *   callback  - the php callback function name callback function prototype as: function my_download_file_callback($args, $file_size, $data)
     *   args      - use argument for callback function
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_download_file_to_callback($group_name, $remote_filename, array $download_callback, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * return true for success, false for error
     *
     * @param string $file_id the file id of the file
     * @param array $download_callback the download callback array, elements as:
     *   callback  - the php callback function name callback function prototype as: function my_download_file_callback($args, $file_size, $data)
     *   args      - use argument for callback function
     * @param int $file_offset file start offset, default value is 0
     * @param int $download_bytes 0 (default value) means from the file offset to the file end
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_download_file_to_callback1($file_id, array $download_callback, $file_offset=0, $download_bytes=0, $tracker_server=array(), $storage_server=array()){}

    /**
     * set meta data of the file
     * return true for success, false for error
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $op_type operate flag, can be one of following flags:
     *   FDFS_STORAGE_SET_METADATA_FLAG_MERGE: combined with the old meta data
     *   FDFS_STORAGE_SET_METADATA_FLAG_OVERWRITE: overwrite the old meta data
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_set_metadata($group_name, $remote_filename, array $meta_list, $op_type='', $tracker_server=array(), $storage_server=array()){}

    /**
     * set meta data of the file
     * return true for success, false for error
     *
     * @param string $file_id the file id of the file
     * @param array $meta_list meta data assoc array, such as array('width'=>1024, 'height'=>768)
     * @param string $op_type operate flag, can be one of following flags:
     *   FDFS_STORAGE_SET_METADATA_FLAG_MERGE: combined with the old meta data
     *   FDFS_STORAGE_SET_METADATA_FLAG_OVERWRITE: overwrite the old meta data
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_set_metadata1($file_id, array $meta_list, $op_type='', $tracker_server=array(), $storage_server=array()){}

    /**
     * get meta data of the file
     * return array for success, false for error
     * returned array like: array('width' => 1024, 'height' => 768)
     *
     * @param string $group_name the group name of the master file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_get_metadata($group_name, $remote_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * get meta data of the file
     * return array for success, false for error
     * returned array like: array('width' => 1024, 'height' => 768)
     *
     * @param string $file_id the file id of the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return array|bool
     */
    public function storage_get_metadata1($file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * check file exist
     * return true for exist, false for not exist
     *
     * @param string $group_name the group name of the file
     * @param string $remote_filename the filename on the storage server
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_file_exist($group_name, $remote_filename, $tracker_server=array(), $storage_server=array()){}

    /**
     * check file exist
     * return true for exist, false for not exist
     *
     * @param string $file_id the file id of the file
     * @param array $tracker_server the tracker server assoc array including elements: ip_addr, port and sock
     * @param array $storage_server the storage server assoc array including elements: ip_addr, port and sock
     * @return bool
     */
    public function storage_file_exist1($file_id, $tracker_server=array(), $storage_server=array()){}

    /**
     * return last error no
     *
     * @return int
     */
    public function get_last_error_no(){}

    /**
     * return last error info
     *
     * @return string
     */
    public function get_last_error_info(){}

    /**
     * generate anti-steal token for HTTP download
     * return token string for success, false for error
     *
     * @param string $file_id the file id of the file
     * @param int $timestamp the timestamp (unix timestamp)
     * @return string|bool
     */
    public function http_gen_token($file_id, $timestamp){}

    /**
     * get file info from the filename
     * return assoc array for success, false for error.
     * the assoc array including following elements:
     *   create_timestamp: the file create timestamp (unix timestamp)
     *   file_size: the file size (bytes)
     *   source_ip_addr: the source storage server ip address
     *   crc32: the crc32 signature of the file
     *
     * @param string $group_name the group name of the file
     * @param string $remote_filename the filename on the storage server
     * @return array|bool
     */
    public function get_file_info($group_name, $remote_filename){}

    /**
     * get file info from the file id
     * return assoc array for success, false for error.
     * the assoc array including following elements:
     *   create_timestamp: the file create timestamp (unix timestamp)
     *   file_size: the file size (bytes)
     *   source_ip_addr: the source storage server ip address
     *
     * @param string $file_id the file id (including group name and filename) or remote filename
     * @return array|bool
     */
    public function get_file_info1($file_id){}

    /**
     * return true for success, false for error
     *
     * @param int $sock the unix socket description
     * @param string $buff the buff to send
     * @return bool
     */
    public function send_data($sock, $buff){}

    /**
     * generate slave filename by master filename, prefix name and file extension name
     * return slave filename string for success, false for error
     *
     * @param string $master_filename the master filename / file id to generate the slave filename
     * @param string $prefix_name the prefix name  to generate the slave filename
     * @param string $file_ext_name slave file extension name, can be null or empty (do not including dot)
     * @return string|bool
     */
    public function gen_slave_filename($master_filename, $prefix_name, $file_ext_name=''){}

    /**
     * close tracker connections
     *
     * @return void
     */
    public function close(){}
}