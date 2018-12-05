<?php
define('SWOOLE_BASE', 1);
define('SWOOLE_PROCESS', 2);
define('SWOOLE_IPC_UNSOCK', 1);
define('SWOOLE_IPC_MSGQUEUE', 2);
define('SWOOLE_IPC_PREEMPTIVE', 3);
define('SWOOLE_SOCK_TCP', 1);
define('SWOOLE_SOCK_TCP6', 3);
define('SWOOLE_SOCK_UDP', 2);
define('SWOOLE_SOCK_UDP6', 4);
define('SWOOLE_SOCK_UNIX_DGRAM', 5);
define('SWOOLE_SOCK_UNIX_STREAM', 6);
define('SWOOLE_TCP', 1);
define('SWOOLE_TCP6', 3);
define('SWOOLE_UDP', 2);
define('SWOOLE_UDP6', 4);
define('SWOOLE_UNIX_DGRAM', 5);
define('SWOOLE_UNIX_STREAM', 6);
define('SWOOLE_SOCK_SYNC', 0);
define('SWOOLE_SOCK_ASYNC', 1);
define('SWOOLE_SYNC', 2048);
define('SWOOLE_ASYNC', 1024);
define('SWOOLE_KEEP', 4096);
define('SWOOLE_SSL', 512);
define('SWOOLE_SSLv3_METHOD', 1);
define('SWOOLE_SSLv3_SERVER_METHOD', 2);
define('SWOOLE_SSLv3_CLIENT_METHOD', 3);
define('SWOOLE_SSLv23_METHOD', 0);
define('SWOOLE_SSLv23_SERVER_METHOD', 4);
define('SWOOLE_SSLv23_CLIENT_METHOD', 5);
define('SWOOLE_TLSv1_METHOD', 6);
define('SWOOLE_TLSv1_SERVER_METHOD', 7);
define('SWOOLE_TLSv1_CLIENT_METHOD', 8);
define('SWOOLE_TLSv1_1_METHOD', 9);
define('SWOOLE_TLSv1_1_SERVER_METHOD', 10);
define('SWOOLE_TLSv1_1_CLIENT_METHOD', 11);
define('SWOOLE_TLSv1_2_METHOD', 12);
define('SWOOLE_TLSv1_2_SERVER_METHOD', 13);
define('SWOOLE_TLSv1_2_CLIENT_METHOD', 14);
define('SWOOLE_DTLSv1_METHOD', 15);
define('SWOOLE_DTLSv1_SERVER_METHOD', 16);
define('SWOOLE_DTLSv1_CLIENT_METHOD', 17);
define('SWOOLE_EVENT_READ', 512);
define('SWOOLE_EVENT_WRITE', 1024);
define('SWOOLE_VERSION', '4.2.5');
define('SWOOLE_ERROR_MALLOC_FAIL', 501);
define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);
define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);
define('SWOOLE_ERROR_NAME_TOO_LONG', 504);
define('SWOOLE_ERROR_INVALID_PARAMS', 505);
define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);
define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);
define('SWOOLE_ERROR_FILE_EMPTY', 702);
define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 703);
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 704);
define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);
define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);
define('SWOOLE_ERROR_SESSION_CLOSING', 1003);
define('SWOOLE_ERROR_SESSION_CLOSED', 1004);
define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);
define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);
define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);
define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1008);
define('SWOOLE_ERROR_SSL_NOT_READY', 1009);
define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1010);
define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1011);
define('SWOOLE_ERROR_SSL_VEFIRY_FAILED', 1012);
define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1013);
define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1014);
define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);
define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1202);
define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);
define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);
define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);
define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);
define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);
define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);
define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);
define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 8001);
define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 8002);
define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);
define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);
define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);
define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);
define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);
define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);
define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);
define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);
define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);
define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);
define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);
define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);
define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9010);
define('SWOOLE_TRACE_SERVER', 2);
define('SWOOLE_TRACE_CLIENT', 4);
define('SWOOLE_TRACE_BUFFER', 8);
define('SWOOLE_TRACE_CONN', 16);
define('SWOOLE_TRACE_EVENT', 32);
define('SWOOLE_TRACE_WORKER', 64);
define('SWOOLE_TRACE_REACTOR', 256);
define('SWOOLE_TRACE_PHP', 512);
define('SWOOLE_TRACE_HTTP2', 1024);
define('SWOOLE_TRACE_EOF_PROTOCOL', 2048);
define('SWOOLE_TRACE_LENGTH_PROTOCOL', 4096);
define('SWOOLE_TRACE_CLOSE', 8192);
define('SWOOLE_TRACE_HTTP_CLIENT', 16384);
define('SWOOLE_TRACE_COROUTINE', 32768);
define('SWOOLE_TRACE_REDIS_CLIENT', 65536);
define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);
define('SWOOLE_TRACE_AIO', 262144);
define('SWOOLE_TRACE_ALL', 4294967295);
define('SWOOLE_LOG_DEBUG', 0);
define('SWOOLE_LOG_TRACE', 1);
define('SWOOLE_LOG_INFO', 2);
define('SWOOLE_LOG_NOTICE', 3);
define('SWOOLE_LOG_WARNING', 4);
define('SWOOLE_LOG_ERROR', 5);
define('SWOOLE_IPC_NONE', 0);
define('SWOOLE_IPC_UNIXSOCK', 1);
define('SWOOLE_IPC_SOCKET', 3);
define('SWOOLE_REDIS_MODE_MULTI', 0);
define('SWOOLE_REDIS_MODE_PIPELINE', 1);
define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);
define('SWOOLE_REDIS_TYPE_STRING', 1);
define('SWOOLE_REDIS_TYPE_SET', 2);
define('SWOOLE_REDIS_TYPE_LIST', 3);
define('SWOOLE_REDIS_TYPE_ZSET', 4);
define('SWOOLE_REDIS_TYPE_HASH', 5);
define('SW_PGSQL_ASSOC', 1);
define('SW_PGSQL_NUM', 2);
define('SW_PGSQL_BOTH', 3);
define('SWOOLE_DEFAULT_MAX_CORO_NUM', 3000);
define('SWOOLE_MAX_CORO_NUM_LIMIT', 524288);
define('SWOOLE_EXIT_IN_COROUTINE', 2);
define('SWOOLE_EXIT_IN_SERVER', 4);
define('SWOOLE_AIO_BASE', 0);
define('SWOOLE_AIO_LINUX', 0);
define('SWOOLE_HOOK_FILE', 2);
define('SWOOLE_HOOK_SLEEP', 4);
define('SWOOLE_HOOK_TCP', 8);
define('SWOOLE_HOOK_UDP', 16);
define('SWOOLE_HOOK_UNIX', 32);
define('SWOOLE_HOOK_UDG', 64);
define('SWOOLE_HOOK_SSL', 128);
define('SWOOLE_HOOK_TLS', 256);
define('SWOOLE_HOOK_ALL', 2147483647);
define('SWOOLE_FILELOCK', 2);
define('SWOOLE_MUTEX', 3);
define('SWOOLE_SEM', 4);
define('SWOOLE_RWLOCK', 1);
define('WEBSOCKET_STATUS_CONNECTION', 1);
define('WEBSOCKET_STATUS_HANDSHAKE', 2);
define('WEBSOCKET_STATUS_FRAME', 3);
define('WEBSOCKET_STATUS_ACTIVE', 3);
define('WEBSOCKET_STATUS_CLOSING', 4);
define('WEBSOCKET_OPCODE_CONTINUATION', 0);
define('WEBSOCKET_OPCODE_TEXT', 1);
define('WEBSOCKET_OPCODE_BINARY', 2);
define('WEBSOCKET_OPCODE_CLOSE', 8);
define('WEBSOCKET_OPCODE_PING', 9);
define('WEBSOCKET_OPCODE_PONG', 10);
define('WEBSOCKET_CLOSE_NORMAL', 1000);
define('WEBSOCKET_CLOSE_GOING_AWAY', 1001);
define('WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);
define('WEBSOCKET_CLOSE_DATA_ERROR', 1003);
define('WEBSOCKET_CLOSE_STATUS_ERROR', 1005);
define('WEBSOCKET_CLOSE_ABNORMAL', 1006);
define('WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);
define('WEBSOCKET_CLOSE_POLICY_ERROR', 1008);
define('WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);
define('WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);
define('WEBSOCKET_CLOSE_SERVER_ERROR', 1011);
define('WEBSOCKET_CLOSE_TLS', 1015);
define('SWOOLE_HTTP2_TYPE_DATA', 0);
define('SWOOLE_HTTP2_TYPE_HEADERS', 1);
define('SWOOLE_HTTP2_TYPE_PRIORITY', 2);
define('SWOOLE_HTTP2_TYPE_RST_STREAM', 3);
define('SWOOLE_HTTP2_TYPE_SETTINGS', 4);
define('SWOOLE_HTTP2_TYPE_PUSH_PROMISE', 5);
define('SWOOLE_HTTP2_TYPE_PING', 6);
define('SWOOLE_HTTP2_TYPE_GOAWAY', 7);
define('SWOOLE_HTTP2_TYPE_WINDOW_UPDATE', 8);
define('SWOOLE_HTTP2_TYPE_CONTINUATION', 9);
define('SWOOLE_HTTP2_ERROR_NO_ERROR', 0);
define('SWOOLE_HTTP2_ERROR_PROTOCOL_ERROR', 1);
define('SWOOLE_HTTP2_ERROR_INTERNAL_ERROR', 2);
define('SWOOLE_HTTP2_ERROR_FLOW_CONTROL_ERROR', 3);
define('SWOOLE_HTTP2_ERROR_SETTINGS_TIMEOUT', 4);
define('SWOOLE_HTTP2_ERROR_STREAM_CLOSED', 5);
define('SWOOLE_HTTP2_ERROR_FRAME_SIZE_ERROR', 6);
define('SWOOLE_HTTP2_ERROR_REFUSED_STREAM', 7);
define('SWOOLE_HTTP2_ERROR_CANCEL', 8);
define('SWOOLE_HTTP2_ERROR_COMPRESSION_ERROR', 9);
define('SWOOLE_HTTP2_ERROR_CONNECT_ERROR', 10);
define('SWOOLE_HTTP2_ERROR_ENHANCE_YOUR_CALM', 11);
define('SWOOLE_HTTP2_ERROR_INADEQUATE_SECURITY', 12);
define('SWOOLE_FAST_PACK', 1);
define('UNSERIALIZE_OBJECT_TO_ARRAY', 1);
define('UNSERIALIZE_OBJECT_TO_STDCLASS', 2);
