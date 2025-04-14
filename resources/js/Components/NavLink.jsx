import { Link } from '@inertiajs/react';

export default function NavLink({ active = false, url = '#', title, icon: Icon, ...props }) {
    return (
        <Link
            {...props}
            href={url}
            className={cn(
                active
                    ? 'to-orange500 bg-gradient-to-r from-orange-400 via-orange-600 font-semibold text-white hover:text-white'
                    : 'text-muted-foreground hover:text-orange-500',
                'round-lg flex items-center gap-3 font-medium transition-all',
            )}
        >
            <Icon className="h-4 w-4" />
            {title}
        </Link>
    );
}
