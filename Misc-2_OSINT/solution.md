# OSINT Challenge

Given `gutti.png`, the goal is to check the metadata to find the Author's name (ReezMaxwell) and the comment: "Support me in Github."

## Author Information

- **Author's Name:** ReezMaxwell

## GitHub Profile
- **GitHub:** [ReezMaxwell](https://github.com/ReezMaxwell)
	- **Method 1:**
		- "Interceptai repo" -> `example.png` -> fix magic bytes -> flag in Request header as b64.

## Social Media Profiles
- **Twitter:** [ReezMaxwell](https://twitter.com/reezmaxwell3301)
- **Reddit:** [Reez-Che3se](https://www.reddit.com/user/Reez-Che3se)
	- **Method 2:**
		- Reading the posts, it's discovered that a post was deleted.
		- The user prefers to use old.reddit.com.
		- Emphasis on the term "wayback."
		- Use Wayback Machine on the old.reddit.com profile to retrieve an old post. (get FLAG)

## FLAG
The flag is: `glitch{1ike_n33dle_1n_a_hay5tack}`
