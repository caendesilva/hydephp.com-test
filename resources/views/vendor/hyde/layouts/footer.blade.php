<footer class="px-4 pt-12 pb-6  dark:text-white dark:bg-slate-900 bg-gray-100">
	<div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
		<div class="block md:w-1/3 px-2 mx:px-0">
			<span class="flex items-center w-fit">
				<a href="{{ Hyde::relativeLink('index.html') }}" class="flex items-center mr-4">
					<img  class="w-auto h-8 mt-1 text-black dark:text-white fill-current" src="/media/logo.svg" />
					
					<span class="ml-2 text-lg font-black">HydePHP</span>
				</a>
			</span>
			
			<p class="font-light text-left text-gray-700 text-sm pl-1 pr-6 lg:pr-8 pt-2 dark:text-gray-300 ">
				Create, websites, blogs, documentation sites, with the power of Laravel and the simplicity of Markdown. Your next website is minutes away from becoming a reality.
			</p>
		</div>
		<div class="flex flex-wrap md:flex-nowrap whitespace-nowrap md:w-2/3 mt-3 sm:mt-6 mb-4 text-sm  lg:mt-0">
			<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
				<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Resources</li>
				<li><a href="{{ Hyde::relativeLink(DocumentationPage::home()) }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
					Documentation</a></li>
					
					<li><a href="{{ Hyde::relativeLink('community.html') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Community Portal
					</a></li>
					
					<li><a href="{{ Hyde::relativeLink('legal.html') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Legal Information
					</a></li>
				</ul>
				<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
					<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Developers</li>
					<li><a href="{{ Hyde::relativeLink('community.html#developers') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Developer Resources
					</a></li>
					<li><a href="https://github.com/hydephp/" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">GitHub Organization</a></li>
					<li><a href="https://github.com/hydephp/develop" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">Source Code</a></li>
				</ul>
				<ul class="flex flex-col w-fit sm:w-full pr-4 p-0 font-normal text-left text-gray-300 dark:text-gray-700 list-none">
					<li class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Extra</li>
					<li><a href="{{ Hyde::relativeLink('sitemap.html') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Sitemap
					</a></li>
					<li><a href="{{ Hyde::relativeLink('posts.html') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						Blog Posts
					</a></li>
					
					<li><a href="{{ Hyde::relativeLink('feed.xml') }}" class="inline-block px-3 py-2 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white">
						RSS Feed
					</a></li>
				</ul>
				<div class="flex flex-col w-full text-gray-300 dark:text-gray-700">
					<div class="inline-block px-3 py-2 font-medium tracking-wide text-black dark:text-white uppercase mt-4 md:mt-0">Connect</div>
					<div class="flex justify-start pl-4 mt-2">
						
						<a title="GitHub Organization" class="items-center block mr-4 dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://github.com/HydePHP">
							<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/1000/svg">
								<path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
							</svg>
						</a>
						<a title="Twitter &commat;HydeFramework" class="items-center block  mr-4  dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://twitter.com/HydeFramework">
							<svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/1000/svg">
								<path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
							</svg>
						</a>
						<a title="Discord Server" class="items-center block dark:text-gray-300 text-gray-700 no-underline hover:text-black dark:hover:text-white" target="_blank" rel="noopener" href="https://discord.hydephp.com">
							<svg class="w-5 h-5 fill-current"  width="71" height="55" viewBox="0 0 71 55" fill="none" xmlns="http://www.w3.org/1000/svg"> <g clip-path="url(#clip0)"> <path d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z" fill=""/> </g> <defs> <clipPath id="clip0"> <rect width="71" height="55" fill="white"/> </clipPath> </defs> </svg>
						</a>
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="mt-4 mb-6 prose mx-auto text-center text-sm dark:prose-invert">
			@stack('footer')
		</div>
		<div class="relative pt-6 text-center text-gray-600 dark:text-gray-300 border-t border-gray-300 dark:border-gray-800 "> 
			<div class="prose mx-auto text-center text-sm dark:prose-invert">
				{!! \Hyde\Framework\Facades\Includes::markdown('footer',
					config('hyde.footer', 'Site proudly built with [HydePHP](https://github.com/hydephp/hyde) 🎩')) !!}
			</div>
			<a href="#app" aria-label="Go to top of page" class="float-right bottom-0 right-4 absolute">
				<button title="Scroll to top">
					<svg role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/1000/svg" viewBox="0 0 20 20">
						<path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
					</svg>
				</button>
			</a>
		</div>
	</div>
</footer>