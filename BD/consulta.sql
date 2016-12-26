SELECT pg_terminate_backend(pid) FROM pg_stat_activity WHERE datname = 'basededatos';
delete from periodo where cveperiodo=8