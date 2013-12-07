---
title: Troubleshooting
---

## Using safe mode ## {#safe-mode}

There would be time when you might face problem with Orchestra Platform where an extension might cause a bug and your application stop working. In such event, you can use the safe mode to stop any extension from being loaded during bootstrap.

To do this, just add `?safe_mode=on` to your URL (in the browser). This way, we would create a session data to indicate that you are browsing the site in safe mode. Once you have deactivate any problematic/broken extension just add `?safe_mode=off` to browse the website normally (with extensions re-enabled).
