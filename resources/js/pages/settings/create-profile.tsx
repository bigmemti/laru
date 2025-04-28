import InputError from "@/components/input-error";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import AuthLayout from "@/layouts/auth-layout";
import { Head, useForm } from "@inertiajs/react";
import { LoaderCircle } from "lucide-react";
import { FormEventHandler } from "react";

export default function CreateProfile() {
    const { post, processing, errors, data, setData } = useForm({
        username: '',
        image: null,
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();

        post(route('profile.store'));
    };
    return (
        <AuthLayout title="Create Profile" description="Create your profile to get started">
            <Head title="Create Profile" />

            <form onSubmit={submit} className="space-y-6 text-center">
                <div className="grid gap-2">
                    <Label htmlFor="username">Username</Label>
                    <Input id="username" type="text" name="username" placeholder="Username" value={data.username} onChange={(e) => setData('username', e.target.value)} />
                    <InputError message={errors.username} />
                </div>
                <div className="grid gap-2">
                    <Label htmlFor="image">Image</Label>
                    <Input id="image" type="file" name="image" onChange={(e) => setData('image', e.target.files?.[0])} />
                    <InputError message={errors.image} />
                </div>
                <Button disabled={processing} variant="secondary">
                    {processing && <LoaderCircle className="h-4 w-4 animate-spin" />}
                    Create
                </Button>
            </form>
        </AuthLayout>
    );
}