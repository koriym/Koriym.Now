# Koriym.Now

Provide current time with [NowInterface](https://github.com/koriym/Koriym.Now/blob/1.x/src/NowInterface.php)

# Usage

```php
use namespace Koriym\Now\Now;
use namespace Koriym\Now\FakeNow;

$now = new Now;
(string) $now // 2015-11-09 01:00:00

$fakeNow = new FakeNow;
(string) $fakeNow // 1970-01-01 00:00:00 = FakeNow::Time
```

# For Ray.Di

```php
use namespace Koriym\Now\NowInterface;

public function configure()
{
    // prod
    $this->bind(NowInterface::class)->to(Now::class);
    // develop
    $this->bind(NowInterface::class)->to(FakeNow::class);
}
```
