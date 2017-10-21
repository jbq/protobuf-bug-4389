# protobuf-crash

Testcase to reproduce issue #4389 for Protobuf PHP extension version
3.5.1

## Usage

Run `make` and you should get the following bogus output:

```
... copious build log ...
[Thread debugging using libthread_db enabled]
Using host libthread_db library "/lib/x86_64-linux-gnu/libthread_db.so.1".
{"v":{"t0","2":"t2"}}
[Inferior 1 (process 7) exited normally]
```
